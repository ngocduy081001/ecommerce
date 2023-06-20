<?php

namespace App\Http\Controllers;

use App\Http\Requests\CartRequest;
use App\Models\Cart;
use App\Models\Color;
use App\Models\Size;
use App\Models\ColorSize;
use App\Models\Order;
use App\Models\OrderDetail;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;

class CartController extends Controller
{
    //
    protected $cart;
    protected $order;
    protected $oder_detail;
    public function __construct(Cart $cart, Order $oder, OrderDetail $oder_detail)
    {
        $this->cart = $cart;
        $this->order = $oder;
        $this->oder_detail = $oder_detail;
    }

    public function addToCart(CartRequest $request)
    {
        //    $cookie =  Cookie::forget('cart');
        //     return redirect()->back()->withCookie($cookie);
        $cart_cookie = json_decode($request->cookie('cart'), true);

        $product = Product::find($request->product);
        $product_color_size = ColorSize::where('product_id', $product->id)->where('color_id', $request->color)->where('size_id', $request->size)->first();
        if ($product_color_size) {
            return redirect()->back()->with('error', 'Sản phẩm không tồn tại');
        }
        if (auth()->check()) {
            $this->cart->create([
                'product_id' => $request->product,
                'color_id' => $request->color,
                'size_id' => $request->size,
                'quantity' => $request->quantity,
                'user_id' => auth()->user()->id,
            ]);
        } else {
            $cart_cookie = json_decode($request->cookie('cart'), true);
            $flag = false;
            if ($cart_cookie) {
                foreach ($cart_cookie as $key => $item) {
                    if ($item['product_id'] == $request->product && $item['color_id'] == $request->color  && $item['size_id'] == $request->size) {
                        $cart_cookie[$key]['quantity'] += $request->quantity;
                        $flag = true;
                    }
                }
                if ($flag == false) {
                    array_push($cart_cookie, [
                        'product_id' => $request->product,
                        'color_id' => $request->color,
                        'size_id' => $request->size,
                        'quantity' => $request->quantity,
                    ]);
                }
            } else {
                $cart_cookie[] = [
                    'product_id' => $request->product,
                    'color_id' => $request->color,
                    'size_id' => $request->size,
                    'quantity' => $request->quantity,
                ];
            }
            $one_month = time() + 60 * 60 * 24 * 30;
            $cart_cookie = cookie('cart', json_encode($cart_cookie), $one_month);

            return redirect()->route('cart.get.to.cart')->withCookie($cart_cookie);
        }
        return redirect()->route('cart.get.to.cart');
    }

    public function getToCart()
    {
        $cart_cookie = json_decode(Cookie::get('cart'), true);

        $cart = [];
        $cast_total = 0;
        if ($cart_cookie) {
            foreach ($cart_cookie as $key => $item) {
                //  dd($item);
                $product = Product::find($item['product_id']);
                $color = Color::find($item['color_id']);
                $size = Size::find($item['size_id']);
                $cart[] = [
                    'product' => [
                        'id' => $item['product_id'],
                        'name' => $product->name,
                    ],
                    'size'  => [
                        'id' => $item['size_id'],
                        'name' => $size->name
                    ],
                    'color' => [
                        'id' => $item['color_id'],
                        'name' =>  $color->name
                    ],
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                ];

                $cast_total += $item['quantity'] *  $product->price;
            }
        }
        return view('client.page.cart.get-to-cart', compact('cart', 'cast_total'));
    }


    public function changeQuantity(Request $request)
    {

        if (auth()->check()) {
        } else {
            $cart_cookie = json_decode($request->cookie('cart'), true);
            $cast_total = 0;
            if ($request->coupon) {
                $coupon = $request->coupon;
            }
            foreach ($cart_cookie as $key => $item) {

                $product = Product::find($item['product_id']);
                if (
                    $item['product_id'] == $request->product
                    && $item['color_id'] == $request->color
                    && $item['size_id'] == $request->size
                ) {
                    if ($request->type == 1) {
                        $cart_cookie[$key]['quantity'] = $request->quantity + 1;
                        $total =  $product->price  * ($item['quantity'] + 1);
                        $cast_total +=   $product->price * ($item['quantity'] + 1);
                    } else {
                        $cart_cookie[$key]['quantity'] = $request->quantity - 1;
                        $total =  $product->price  * ($item['quantity'] - 1);
                        $cast_total +=   $product->price * ($item['quantity'] - 1);
                    }
                } else {

                    $cast_total +=  $product->price  * $item['quantity'];
                }
            }

            $one_month = time() + 60 * 60 * 24 * 30;

            return response([
                'cast_total' => $cast_total,
                'total' => $total
            ])->withCookie(cookie('cart', json_encode($cart_cookie), $one_month));
        }
    }


    public function checkout()
    {
        $cart_cookie = json_decode(\request()->cookie('cart'), true);
        $cart = [];
        $cast_total = 0;
        foreach ($cart_cookie as $key => $item) {

            $product = Product::find($item['product_id']);
            $color = Color::find($item['color_id']);
            $size = Size::find($item['size_id']);
            $cart[] = [
                'product' => [
                    'id' => $item['product_id'],
                    'name' => $product->name,
                ],
                'size'  => [
                    'id' => $item['size_id'],
                    'name' => $size->name
                ],
                'color' => [
                    'id' => $item['color_id'],
                    'name' =>  $color->name
                ],
                'quantity' => $item['quantity'],
                'price' => $product->price,
            ];

            $cast_total += $item['quantity'] *  $product->price;
        }

        return view('client.page.cart.checkout', compact('cart', 'cast_total'));
    }


    public function postCheckOut(Request $request)
    {

        if (auth()->check()) {
            # code...
        } else {
            $cart_cookie = json_decode($request->cookie('cart'), true);

            $order = $this->order->create([

                'name' => $request->name,
                'phone' => $request->phone,
                'delivery' => $request->address,
                'status' => 0,
                'payment_id' => $request->payment,
                'total' => $request->cast_total
            ]);
            $code = generateCode($order->id, 'DH');

            $this->order->find($order->id)->update([
                'code' => $code
            ]);
            foreach ($cart_cookie as $key => $item) {
                $product = Product::find($item['product_id']);
                $this->oder_detail->create([
                    'order_id' => $order->id,
                    'product_id' => $item['product_id'],
                    'quantity' => $item['quantity'],
                    'price' => $product->price,
                    'color_id' => $item['color_id'],
                    'size_id' => $item['size_id'],
                ]);
            }
            $cookie =  Cookie::forget('cart');
            Cookie::queue($cookie);

            return view('client.page.cart.checkout-success');
        }
    }
}

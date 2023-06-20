<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Color;
use App\Models\Product;
use App\Models\ProductColor;
use App\Models\ProductSize;
use App\Models\Size;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    protected $product;
    protected $category;
    public function __construct(Product $product, Category $category)
    {
        $this->product = $product;
        $this->category = $category;
    }

    public function detail($slug)
    {
        $product = $this->product->where('slug', $slug)->with('colorSize', function ($q) {
            $q->with('color')->with('size');
        })->first();

        $product_category =  $this->product->where('id', '!=', $product->id)->where('category_id', $product->category_id)->get();

        $product_color = ProductColor::where('product_id', $product->id)->with('color')->get();

        $product_size = ProductSize::where('product_id', $product->id)->with('size')->get();

        return view('client.page.product.detail', compact('product', 'product_category', 'product_size', 'product_color'));
    }
    public function listToCategory($slug, Request $request)
    {

        $category = $this->category->where('slug', $slug)->first();

        $product = $this->product->where('category_id', $category->id)->paginate(10);

        $color = Color::with('hasProduct')->get();
        $product_all_color = ProductColor::all()->count();

        $size = Size::with('hasProduct')->get();

        $product_all_size = ProductSize::all()->count();

        $product_all = $this->product->all()->count();

        $product_0 = $this->product->where('price', '<', '100000')->get()->count();
        $product_1 = $this->product->where('price', '>', '100000')->where('price', '<=', '200000')->get()->count();
        $product_2 = $this->product->where('price', '>', '200000')->where('price', '<=', '300000')->get()->count();
        $product_3 = $this->product->where('price', '>', '300000')->where('price', '<=', '400000')->get()->count();
        $product_4 = $this->product->where('price', '>', '400000')->where('price', '<=', '500000')->get()->count();
        $size = Size::all();
        return view(
            'client.page.product.list',
            compact('category', 'product', 'size', 'color', 'product_all_color', 'product_all_size', 'product_all', 'product_1', 'product_2', 'product_3', 'product_4', 'product_0')
        )->with('slug', $slug);
    }

    public function filter(Request $request)
    {

        $product = $this->product->where('id', '>', 0);
        if ($request->search) {
          
             $product->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->price) {
            $price = $request->price;
            $product =   $product->where(function ($query) use ($price) {
                foreach ($price as $key => $value) {
                    switch ($value) {
                        case '0-100000':
                            $query->orWhere('price', '=<', 100000);
                            break;
                        case '100000-200000':
                            $query->orWhere(function ($q) {
                                $q->where('price', '>', 99000);
                                $q->where('price', '<', 201000);
                            });
                            break;
                        case '200000-300000':
                            $query->orWhere(function ($q) {
                                $q->where('price', '<', 301000)->where('price', '>', 200000);
                            });
                            break;
                        case '300000-400000':
                            $query->orWhere(function ($q) {

                                $q->where('price', '<', 401000)->where('price', '>', 300000);
                            });

                            break;
                        case '400000-500000':
                            $query->orWhere(function ($q) {
                                $q->Where('price', '<', 501000)->Where('price', '>', 400000);
                            });
                            break;

                        default:
                            $query->orWhere('price', '>', 0);
                            break;
                    }
                }
            });
          
        }
        if ($request->color && !$request->size) {

            $color = $request->color;

            // $product->with('colorSize');

            $product->whereHas('colorSize', function ($query) use ($color) {
                $arrColor = [];
                foreach ($color as $key => $value) {
                    switch ($value) {
                        case 'Đen':
                            array_push($arrColor, 8);

                            break;
                        case 'Trắng':
                            array_push($arrColor, 3);

                            break;
                        case 'Đỏ':
                            array_push($arrColor, 1);

                            break;
                        case 'Be':
                            array_push($arrColor, 4);

                            break;
                        case 'Nâu':
                            array_push($arrColor, 5);

                            break;
                        case 'Rêu':
                            array_push($arrColor, 6);

                            break;

                        case 'Xanh':
                            array_push($arrColor, 7);

                            break;
                        default:

                            break;
                    }
                }
                if (count($arrColor)) {
                    $query->whereIn('color_id', $arrColor);
                }
            });
        }
        if ($request->size && !$request->color) {
            $size = $request->size;
            $product = $product->whereHas('colorSize', function ($query) use ($size) {
                $arrSize = [];
                foreach ($size as $key => $value) {
                    switch ($value) {
                        case 'S':
                            array_push($arrSize, 3);

                            break;
                        case 'M':
                            array_push($arrSize, 1);

                            break;
                        case 'L':
                            array_push($arrSize, 2);
                            break;
                    }
                }
                if (count($arrSize)) {
                    $query->whereIn('size_id', $arrSize);
                }
            });
        }
        if ($request->size && $request->color) {
            $color = $request->color;
            $size = $request->size;
            $product->whereHas('colorSize', function ($query) use ($size, $color) {
                $arrSize = [];
                $arrColor = [];
                foreach ($size as $key => $value) {
                    switch ($value) {
                        case 'S':
                            array_push($arrSize, 3);

                            break;
                        case 'M':
                            array_push($arrSize, 1);

                            break;
                        case 'L':
                            array_push($arrSize, 2);
                            break;
                    }
                }
                foreach ($color as $key => $value) {
                    switch ($value) {
                        case 'Đen':
                            array_push($arrColor, 8);

                            break;
                        case 'Trắng':
                            array_push($arrColor, 3);

                            break;
                        case 'Đỏ':
                            array_push($arrColor, 1);

                            break;
                        case 'Be':
                            array_push($arrColor, 4);

                            break;
                        case 'Nâu':
                            array_push($arrColor, 5);

                            break;
                        case 'Rêu':
                            array_push($arrColor, 6);

                            break;

                        case 'Xanh':
                            array_push($arrColor, 7);

                            break;
                        default:

                            break;
                    }
                }
                $query->whereIn('size_id', $arrSize)->whereIn('color_id', $arrColor);
            });
        }
        if ($request->sort) {
            if ($request->sort == 'desc') {
                $product = $product->get()->sortByDesc('price');
            } else if ($request->sort == 'new') {
                $product = $product->get()->sortByDesc('id');
            } else {
                $product = $product->get()->sortBy('price');
            }
        }
      
        return view('client.page.product.item', compact('product'));

        // if ($request->has('search')) {

        //     $product = Product::search(trim($request->get('search')) ?? '')->get()->toArray();
        // } else {
        //     $posts = Product::get();
        // }
    }




    public function index(Request $request)
    {


        $product = $this->product->paginate(10);

        $color = Color::with('hasProduct')->get();
        $product_all_color = ProductColor::all()->count();

        $size = Size::with('hasProduct')->get();

        $product_all_size = ProductSize::all()->count();

        $product_all = $this->product->all()->count();

        $product_0 = $this->product->where('price', '<', '100000')->get()->count();
        $product_1 = $this->product->where('price', '>', '100000')->where('price', '<=', '200000')->get()->count();
        $product_2 = $this->product->where('price', '>', '200000')->where('price', '<=', '300000')->get()->count();
        $product_3 = $this->product->where('price', '>', '300000')->where('price', '<=', '400000')->get()->count();
        $product_4 = $this->product->where('price', '>', '400000')->where('price', '<=', '500000')->get()->count();
        $size = Size::all();
        return view(
            'client.page.product.list',
            compact('product', 'size', 'color', 'product_all_color', 'product_all_size', 'product_all', 'product_1', 'product_2', 'product_3', 'product_4', 'product_0')
        );
    }

    public function addToCart(Request $request){
        
    }
}

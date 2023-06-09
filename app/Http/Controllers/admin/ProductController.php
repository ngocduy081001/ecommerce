<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private $product;

    private $category;

    public function __construct()
    {
        $this->product = new Product();

        $this->category = new Category();
    }
    public function index(Request $request)
    {

        confirmDelete(config('message.title_delete'), config('message.delete_sweet_alert'));
        return view('server.page.product.grid')->with('data', $this->product->with('category')->paginate(10));
    }

    public function recursiveCategory($data, $result = [])
    {
        foreach ($data as $key => $item) {
            $result[$key] = [
                'id' => $item['id'],
                'title' => $item['name'],
            ];
            if (count($item['children'])) {
                $result[$key]['subs'] =  self::recursiveCategory($item['children']);
            }
        }
        return $result;
    }
    public function create()
    {
        $category = $this->category->where('parent', 0)->with('children')->get()->toArray();
        $result = self::recursiveCategory($category);
        return view('server.page.product.create', compact('result'));
    }
    public function store(ProductRequest $request)
    {
        $this->product->create($request->all());
        alert()->success('Title', config('message.post_success'));
        return view('server.page.product.grid');
    }
    public function edit($id)
    {

        $category = $this->category->where('parent', 0)->with('children')->get()->toArray();
        $result = self::recursiveproduct($category);
      
        return view('server.page.product.edit')
            ->with('data', $this->product->findOrFail($id))
            ->with('result', $result);
    }
    public function update(ProductRequest $request, $id)
    {
        $data = $request->all();
        unset($data['id']);
        $this->product->find($id)->updateOrFail($data);
        return redirect()->route('admin.product.index');
    }
    public function destroy($id)
    {
        if ($this->product->destroy($id)) {
            return redirect()->route('admin.product.index');
        };
    }
    public function show($id)
    {
        return view('server.page.product.detail');
    }

    public function changeStatus($id, Request $request)
    {

        if ($this->product->find($id)->updateOrFail(['status' => $request->status])) {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function destroyList(Request $request)
    {
        if ($this->product->whereIn('id', $request->ids)->delete()) {
            return response()->json([
                'status' => 200,
            ]);
        }
    }

    public function search(Request $request)
    {

        $query = $request->all();

        $result = $this->product->with('parentItem');

        if (isset($query['status'])) {
            $result =    $result->where('status', $query['status']);
        }
        if (isset($query['sort'])) {
            if ($query['sort'] != 'desc') {
                $result =   $result->orderBy('id', 'ASC');
            } else {
                $result =   $result->orderBy('id', 'DESC');
            }
        }
        if (isset($query['search'])) {
            $result =   $result->where('name', 'LIKE', '%' . $query['search'] . '%');
        }
        if (isset($query['perPage'])) {
            $perPage = $query['perPage'];
        }

        return view('server.page.product.grid-item')->with('data', $result->paginate($perPage));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    protected $category;
    protected $product;
    public function __construct(Category $category, Product $product)
    {
        $this->category = $category;
        $this->product = $product;
    }

    public function index()
    {


        // $ao = $this->product->whereHas('category', function ($q) {
        //     $q->where('parent', 10);
        // })->with('colorSize', function ($q) {
        //     $q->with('color')->with('size');
        // })->get();
        $ao = $this->product->whereHas('category', function ($q) {
            $q->where('parent', 10);
        })->get();
        $quan = $this->product->whereHas('category', function ($q) {
            $q->where('parent', 11);
        })->get();

        $phu_kien = $this->product->whereHas('category', function ($q) {
            $q->where('parent', 14);
        })->get();

        return view('client.page.home.index', compact('ao','quan','phu_kien'));
    }
}

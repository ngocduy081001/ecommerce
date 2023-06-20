<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// auth



Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home.index');

Route::get('san-pham/{alias}', 'App\Http\Controllers\ProductController@detail')->name('prodcuct.detail');

Route::get('danh-muc/{alias}', 'App\Http\Controllers\ProductController@listToCategory')->name('product.list.to.category');

Route::get('add-to-cart', 'App\Http\Controllers\CartController@addToCart')->name('cart.add');

Route::get('filter', 'App\Http\Controllers\ProductController@filter')->name('product.filter');

Route::get('cua-hang', 'App\Http\Controllers\ProductController@index')->name('product.shop');

Route::get('tim-kiem', 'App\Http\Controllers\ProductController@search')->name('product.search');

Route::post('gio-hang', 'App\Http\Controllers\CartController@addToCart')->name('car.add.to.cart');

Route::get('gio-hang', 'App\Http\Controllers\CartController@getToCart')->name('cart.get.to.cart');

Route::post('thay-doi-so-luong', 'App\Http\Controllers\CartController@changeQuantity')->name('cart.change.quantity');

Route::get('check-out', 'App\Http\Controllers\CartController@checkout')->name('cart.checkout');

Route::post('check-out', 'App\Http\Controllers\CartController@postCheckOut')->name('cart.post.check.out');

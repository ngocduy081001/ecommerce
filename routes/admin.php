<?php

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


Route::group(['middleware' => ['auth']], function () {
    Route::get('/', function () {
        return view('server.page.dashboard.index');
    })->name('dashboard');


    // category
    Route::get('category/search', 'App\Http\Controllers\admin\CategoryController@search')->name('category.search');
    Route::resource('category', 'App\Http\Controllers\admin\CategoryController')->names('category');
    Route::patch('category/chang-status/{id}', 'App\Http\Controllers\admin\CategoryController@changeStatus')->name('category.status');
    Route::delete('category/destroy/list', 'App\Http\Controllers\admin\CategoryController@destroyList')->name('category.destroy.list');
    Route::delete('category/destroy/list', 'App\Http\Controllers\admin\CategoryController@destroyList')->name('category.destroy.list');

    // Product
    Route::get('product/search', 'App\Http\Controllers\admin\ProductController@search')->name('product.search');
    Route::resource('product', 'App\Http\Controllers\admin\ProductController')->names('product');
    Route::patch('product/chang-status/{id}', 'App\Http\Controllers\admin\ProductController@changeStatus')->name('product.status');
    Route::delete('product/destroy/list', 'App\Http\Controllers\admin\ProductController@destroyList')->name('product.destroy.list');
    Route::delete('product/destroy/list', 'App\Http\Controllers\admin\ProductController@destroyList')->name('product.destroy.list');


    // role

    Route::resource('role', 'App\Http\Controllers\admin\RoleController')->names('role');


    // permission 

    Route::resource('permission', 'App\Http\Controllers\admin\PermissionController')->names('permission');



    // user 

    Route::resource('user', 'App\Http\Controllers\admin\UserController')->names('user');
    Route::get('user/change-status/{id}', 'App\Http\Controllers\admin\UserController@changeStatus')->name('user.status');
    Route::delete('user/destroy/list', 'App\Http\Controllers\admin\UserController@deleteList')->name('user.destroy.list');
    Route::get('user/search', 'App\Http\Controllers\UserController@search')->name('user.search');
});

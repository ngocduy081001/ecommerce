<?php

use Illuminate\Support\Facades\Route;


Route::get('login','App\Http\Controllers\Auth\AuthController@login')->name('login');

Route::post('login','App\Http\Controllers\Auth\AuthController@postLogin')->name('post.login');


Route::get('register','App\Http\Controllers\Auth\AuthController@register')->name('register');

Route::post('register','App\Http\Controllers\Auth\AuthController@postRegister')->name('post.register');


Route::get('dang-xuat','App\Http\Controllers\Auth\AuthController@logOut')->name('logout');
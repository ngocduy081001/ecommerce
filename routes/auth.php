<?php

use Illuminate\Support\Facades\Route;


Route::get('login','App\Http\Controllers\Auth\AuthController@login')->name('login');

Route::post('login','App\Http\Controllers\Auth\AuthController@postLogin')->name('post.login');
<?php

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

Route::get('/', 'client\ProductController@index')->name('home');
Route::get('product/{id}','client\ProductController@product')->name('productdetail');
Route::get('cart','client\ProductController@cart')->name('cart-detail');
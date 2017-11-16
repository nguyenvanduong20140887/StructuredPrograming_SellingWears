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

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('user', 'UserController');

// Product's route
Route::get('product/search', 'ProductController@search')->name('product-search');

Route::resource('product', 'ProductController');

Route::get('cart', 'OrderController@order')->name('cart');

Route::get('test', 'TestController@test');

Route::get('addtocart/{prod_id}', 'CartController@addToCart')->name('product-addtocart');

Route::get('deletefromcart/{prod_id}', 'CartController@deleteFromCart')->name('product-deletefromcart');

Route::get('proceedtocheckout', 'CartController@proceedToCheckout')->name('proceedtocheckout');
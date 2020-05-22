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

Route::get('/','WelcomePageController@index')->name('welcome');

Route::get('/shop','ShopController@index')->name('shop');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');

Route::get('/cart','CartController@index')->name('cart.index');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

use Gloudemans\Shoppingcart\Facades\Cart;
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

Route::get('/shop','ShopController@index')->name('shop.index');
Route::get('/shop/{product}','ShopController@show')->name('shop.show');
Route::get('/search','ShopController@search')->name('search');
Route::get('/search-algolia','ShopController@searchAlgolia')->name('search-algolia');


Route::get('/cart','CartController@index')->name('cart.index');
Route::post('/cart','CartController@store')->name('cart.store');
Route::patch('/cart/{product}','CartController@update')->name('cart.update');
Route::delete('/cart/{product}','CartController@destroy')->name('cart.destroy');
Route::post('/cart/wishlist/{product}','CartController@switchToWishlist')->name('cart.switchtowishlist');

Route::get('/wishlist','WishlistController@index')->name('wishlist.index');
Route::post('/wishlist','WishlistController@store')->name('wishlist.store');
Route::delete('/wishlist/{product}','WishlistController@destroy')->name('wishlist.destroy');
Route::post('/wishlist/cart/{product}','WishlistController@switchToCart')->name('wishlist.switchtocart');

Route::post('/coupon', 'CouponsController@store')->name('coupon.store');
Route::delete('/coupon', 'CouponsController@destroy')->name('coupon.destroy');

Route::get('/checkout','CheckoutController@index')->name('checkout.index');
Route::post('/checkout','CheckoutController@store')->name('checkout.store');

Route::get('/contact','ContactController@index')->name('contact.index');

Route::get('/empty', function(){
    Cart::destroy();
});

Auth::routes();


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

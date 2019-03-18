<?php

use Illuminate\Http\Request;

Route::post('/login', 'UserController@login');
Route::post('/register', 'UserController@register');
Route::get('/', 'HomeController@index');
Route::get('/shop', 'ShopController@index');
Route::post('/shop', 'ShopController@index');
Route::get('/shop/search', 'ShopController@search');
Route::get('/category/{shop}', 'ShopController@category');
Route::get('/products', 'ProductController@index');
Route::get('/product/{product}', 'ProductController@show');
Route::post('/order','OrderController@store');
Route::post('/wishlist','WishlistController@store');
Route::get('/order','OrderController@index');
Route::get('/wishlist','WishlistController@index');

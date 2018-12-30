<?php

use Illuminate\Http\Request;

Route::get('/products', 'HomeController@index');
Route::get('/shop/category', 'CategoryController@category');

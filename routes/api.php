<?php

use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');
Route::get('/shop', 'CategoryController@index');
Route::get('/shop/{shop}/products', 'CategoryController@category');

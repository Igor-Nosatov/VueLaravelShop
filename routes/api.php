<?php

use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');
Route::get('/shop', 'CategoryController@category');

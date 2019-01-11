<?php

use Illuminate\Http\Request;

Route::get('/', 'HomeController@index');
Route::get('/shop', 'CategoryController@index');
Route::get('/category/{shop}', 'CategoryController@category');
Route::post('login', 'UserController@login');
Route::post('register', 'UserController@register');
Route::get('/products', 'ProductController@index');
Route::post('/upload-file', 'ProductController@uploadFile');
Route::get('/search', 'SearchController@search');

    Route::group(['middleware' => 'auth:api'], function(){
        Route::get('/users','UserController@index');
        Route::get('users/{user}','UserController@show');
        Route::patch('users/{user}','UserController@update');
        Route::get('users/{user}/orders','UserController@showOrders');
        Route::patch('orders/{order}/deliver','OrderController@deliverOrder');
        Route::resource('/orders', 'OrderController');
        Route::resource('/products', 'ProductController')->except(['index','show']);
    });

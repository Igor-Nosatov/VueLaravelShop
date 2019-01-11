<?php

Route::get('/{any}', function () {  return view('app'); })->where('any', '.*');
//Route::get('/shop', 'CategoryController@index');
//Route::get('/search', 'SearchController@search');
//Route::get('/category/{shop}', 'CategoryController@category');

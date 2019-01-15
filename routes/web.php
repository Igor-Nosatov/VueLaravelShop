<?php

Route::get('/{any}', function () {  return view('app'); })->where('any', '.*');

//Route::get('/category/{shop}', 'CategoryController@category');

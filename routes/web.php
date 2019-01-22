<?php

Route::get('/{any}', function () {  return view('app'); })->where('any', '.*');
//Route::get('/shop/search/category', 'SearchController@categoryAndFilter');

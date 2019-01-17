<?php

Route::get('/{any}', function () {  return view('app'); })->where('any', '.*');

//Route::get('/search', 'SearchController@search');

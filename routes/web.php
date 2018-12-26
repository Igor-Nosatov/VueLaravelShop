<?php


Route::get('/{any}', function () {
  return view('app');
})->where('any', '.*');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php
//Route::get('/test', 'HomeController@test');

Auth::routes();
Route::get('/{any}', 'SinglePageController@index')->where('any', '.*');

//Route::get('/home', 'HomeController@index')->name('home');

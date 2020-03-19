<?php

//payment form
Route::get('/', 'BkashController@index');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

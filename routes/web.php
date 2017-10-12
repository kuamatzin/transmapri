<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/propuesta2', function () {
    return view('welcome2');
});

Route::get('/products/category/{category}', 'ProductController@getByCategory');
Route::resource('products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

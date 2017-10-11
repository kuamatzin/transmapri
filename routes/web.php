<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/propuesta2', function () {
    return view('welcome2');
});

Route::get('/products/{category}', 'ProductController@getByCategory');
Route::resource('products', 'ProductController');

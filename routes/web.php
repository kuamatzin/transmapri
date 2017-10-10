<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/products/{category}', 'ProductController@getByCategory');
Route::resource('products', 'ProductController');

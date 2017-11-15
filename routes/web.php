<?php

use App\Product;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/misionvision', function () {
    return view('misionvision');
});

Route::get('/products/category/{category}', 'ProductController@getByCategory');

Route::resource('products', 'ProductController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

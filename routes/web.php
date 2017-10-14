<?php

use App\Product;
use Spatie\LaravelImageOptimizer\Facades\ImageOptimizer;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/propuesta2', function () {
    return view('welcome2');
});

Route::get('/products/category/{category}', 'ProductController@getByCategory');
Route::resource('products', 'ProductController');

Route::get('/Optimages', function(){
    $products = Product::all();
    foreach ($products as $product) {
        $url = 'storage/image_products/1RqAycYrNr7y93zAbQeNVTWeL8giDcLHG3fdnila.jpeg';
        if (! file_exists($url)) {
            throw new InvalidArgumentException("Imagesdas does not exist");
        }
        ImageOptimizer::optimize(Storage::disk('public')->url($product->image));   
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class ProductController extends Controller
{
    public function getByCategory($category)
    {
        return Product::where('category', $category)->paginate(9);
    }
}

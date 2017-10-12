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

    public function index()
    {
        $category = Input::get('category');
        $products = $category ? Product::where('category', $category)->get() : Product::where('category', 1)->get();

        return view('products.index', compact('products', 'category'));
    }

    public function create()
    {
        return view('products.create');
    }

    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        $request['image'] = $request->file('file')->store('image_products', 'public');

        $product = Product::create($request->all());

        flash($product->name . ' guardado exitosamente')->success()->important();

        return redirect('products');
    }

    public function update(Product $product, Request $request)
    {
        $request->validate([
            'category' => 'required',
            'name' => 'required',
            'description' => 'required',
        ]);

        if ($request->hasFile('file')) {
            unlink(storage_path() . '/app/public/' . $product->image);
            $request['image'] = $request->file('file')->store('image_products', 'public');
        }

        $product->update($request->all());

        flash($product->name . ' editado exitosamente')->success()->important();

        return redirect('products');
    }
}

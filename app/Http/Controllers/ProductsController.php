<?php

namespace App\Http\Controllers;

use App\Product;

use Illuminate\Http\Request;

class ProductsController extends Controller
{

    public function index()
    {

        $products = Product::all();

        return view('products.index', compact('products'));

    }

    public function create()
    {

        return view('products.create');

    }


    public function store()
    {

        Product::create(request(['name', 'description', 'quantity']));

        return redirect('/products');

    }

    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }


    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    public function update(Request $request, Product $product)
    {
        $product->update(\request(['name', 'description', 'quantity']));

        return redirect('/products');
    }

    public function destroy(Product $product)
    {
        $product->delete();

        return redirect('/products');
    }
}

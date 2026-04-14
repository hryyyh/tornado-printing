<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::with('images')->get();
        return view('pages.product', compact('products'));
    }

    public function show($id)
    {
        $product = Product::with('images')->findOrFail($id);
        return view('product-detail', compact('product'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); // Should be Product::paginate(10); or similar
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        $product = Product::find($id); // Should be Product::where('id', $id)->first(); or findOrFail($id)

        return view('products.missing', compact('prodcut_id')); // Should be $product_id
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        // Bug 1: Missing pagination
        $products = Product::all(); // Should be Product::paginate(10); or similar
        return view('products.index', compact('products'));
    }

    public function show($id)
    {
        // Bug 2: Incorrect query - using find instead of where for dynamic id
        $product = Product::find($id); // Should be Product::where('id', $id)->first(); or findOrFail($id)

        if (!$product) {
            // Bug 3: Typo in variable name
            return view('products.missing', compact('prodcut_id')); // Should be $product_id
        }

        return view('products.show', compact('product'));
    }
}

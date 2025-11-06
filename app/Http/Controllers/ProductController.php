<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index()
    {
        return view('products.index');
    }

    function create()
    {
        $brands = Brand::all();
        $categories = Category::all();

        return view('products.create', [
            'brands' => $brands,
            'categories' => $categories
        ]);
    }

    function show($id, $category = null)
    {
        return view('products.show');
    }

    function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->save();
        return "Se guardó el producto correctamente.";
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    function index(Request $request)
    {
        $query = Product::with(['category', 'brand']);
        
        // Filtro por categoría
        if ($request->has('category') && $request->category != '') {
            $query->where('category_id', $request->category);
        }
        
        // Filtro por marca
        if ($request->has('brand') && $request->brand != '') {
            $query->where('brand_id', $request->brand);
        }
        
        $products = $query->orderBy('id', 'desc')->paginate(12)->appends($request->query());
        
        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();
        
        return view('products.index', [
            'products' => $products,
            'categories' => $categories,
            'brands' => $brands,
            'selectedCategory' => $request->category,
            'selectedBrand' => $request->brand
        ]);
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
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:1000000',
            'category' => 'required|exists:category,id',
            'brand' => 'required|exists:brand,id',
        ]);
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->price = $request->input('price');
        $product->category_id = $request->input('category');
        $product->brand_id = $request->input('brand');
        $product->save();
        return redirect()->route('admin.products.table');
    }

    function table()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        return view('products.table', [
            'products' => $products
        ]);
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return redirect()->route('admin.products.table')->with('success', 'Producto eliminado correctamente.');
    }

}

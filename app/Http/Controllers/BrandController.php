<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function create()
    {
        return view('admin.brand.create');
    }

    public function store(Request $request)
    {
        Brand::create([
            'name' => $request->get('name')
        ]);
        return redirect()->route('admin.brand.table');
    }

    public function table()
    {
        $brands = Brand::orderBy('id', 'desc')->paginate(10);
        return view('admin.brand.table', [
            'brands' => $brands
        ]);
    }
}


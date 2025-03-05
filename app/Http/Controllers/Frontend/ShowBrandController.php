<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand; // Ensure the Brand model is imported

class ShowBrandController extends Controller
{
    public function index()
    {
        // Fetch brand data from the database
        $brands = Brand::all();

        // Return the view with the brand data
        return view('brand.index', compact('brands'));
    }

    public function show($id)
    {
        // Fetch a single brand by its ID
        $brand = Brand::findOrFail($id);

        // Return the view with the brand data
        return view('brand.show', compact('brand'));
    }
}

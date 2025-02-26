<?php
namespace App\Http\Controllers;

use App\Models\Brand;
use App\Models\Product;
use App\Models\Category;
use App\Models\Document;
use Illuminate\Http\Request;

class DownloadController extends Controller
{
    public function downloadPage(Request $request)
    {
        // Fetch Categories, Subcategories, and Brands
        $categories = Category::whereNull('parent_id')->get();
        $brands = Brand::all();

        // Start Query
        $query = Document::with(['product.category', 'product.brand']);

        // Filter by Category
        if ($request->has('category') && !empty($request->category)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->whereIn('category_id', $request->category);
            });
        }

        // Filter by Subcategory
        if ($request->has('subcategory') && !empty($request->subcategory)) {
            $query->whereHas('product.category', function ($q) use ($request) {
                $q->whereIn('id', $request->subcategory);
            });
        }

        // Filter by Brand
        if ($request->has('brand') && !empty($request->brand)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->whereIn('brand_id', $request->brand);
            });
        }

        // Search by Product Name
        if ($request->has('search') && !empty($request->search)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        // Fetch Documents
        $documents = $query->get();

        // Return JSON response for AJAX request
        if ($request->ajax()) {
            return response()->json(['documents' => $documents]);
        }

        // Return View with Data
        return view('frontend.pages.download', compact('categories', 'brands', 'documents'));
    }

    public function fetchSubcategories(Request $request)
    {
        $subcategories = Category::whereIn('parent_id', $request->category_ids)->get();
        return response()->json(['subcategories' => $subcategories]);
    }

    public function filterDocuments(Request $request)
    {
        // Start Query
        $query = Document::with(['product.category', 'product.brand']);

        // Filter by Category
        if ($request->has('category') && !empty($request->category)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->whereIn('category_id', $request->category);
            });
        }

        // Filter by Subcategory
        if ($request->has('subcategory') && !empty($request->subcategory)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->whereIn('category_id', $request->subcategory);
            });
        }

        // Filter by Brand
        if ($request->has('brand') && !empty($request->brand)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->whereIn('brand_id', $request->brand);
            });
        }

        // Search by Product Name
        if ($request->has('search') && !empty($request->search)) {
            $query->whereHas('product', function ($q) use ($request) {
                $q->where('name', 'LIKE', '%' . $request->search . '%');
            });
        }

        // Fetch Documents
        $documents = $query->get();

        // Return JSON response for AJAX request
        return response()->json(['documents' => $documents]);
    }
}

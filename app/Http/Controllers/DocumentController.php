<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DocumentController extends Controller
{
    # ...existing code...

    public function create()
    {
        return view('admin.documents.create');
    }

    public function showCategoryDocuments($category)
    {
        $documents = Document::whereHas('product.category', function ($query) use ($category) {
            $query->where('name', $category);
        })->get();

        return view('frontend.pages.category-documents', compact('category', 'documents'));
    }

    # ...existing code...
}

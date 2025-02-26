<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DocumentCategory;

class DocumentCategoryController extends Controller
{
    public function index()
    {
        $categories = DocumentCategory::all();
        return view('admin.document-category.index', compact('categories'));
    }
}

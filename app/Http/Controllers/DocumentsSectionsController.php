<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;

class DocumentsSectionsController extends Controller
{
    public function index()
    {
        $documents = Document::with('category', 'brand')->get();
        return view('admin.documents-sections.index', compact('documents'));
    }

    public function create()
    {
        return view('admin.documents-sections.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'brand_id' => 'nullable|exists:brands,id',
            'product_id' => 'required|exists:products,id',
            'category_id' => 'required|exists:categories,id',
            'type' => 'required|string',
            'title' => 'nullable|string',
            'description' => 'nullable|string',
            'file_path' => 'required|string',
        ]);

        Document::create([
            'brand_id' => $request->brand_id,
            'product_id' => $request->product_id,
            'category_id' => $request->category_id,
            'type' => $request->type,
            'title' => $request->title,
            'description' => $request->description,
            'file_path' => $request->file_path,
        ]);

        return redirect()->route('documents-sections.index')->with('success', 'Document section created successfully.');
    }

    public function edit($id)
    {
        $document = Document::findOrFail($id);
        return view('admin.documents-sections.edit', compact('document'));
    }

    // ...other methods like create, store, edit, update, destroy...
}

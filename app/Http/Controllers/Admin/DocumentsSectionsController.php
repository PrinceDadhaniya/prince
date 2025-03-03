<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\DocumentsSection; // Ensure this import is correct
use App\Http\Controllers\Controller;

class DocumentsSectionsController extends Controller
{
    public function index()
    {
        $documents = DocumentsSection::with('category', 'brand')->get();
        return view('admin.documents-sections.index', compact('documents'));
    }

    public function create()
    {
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.documents-sections.create', compact('categories', 'brands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_name' => 'required|string|max:255', // New validation rule
            'document_type' => 'required|string|max:255', // New validation rule
            'category_name' => 'required|string|max:255', // New validation rule
            'brand_name' => 'required|string|max:255', // New validation rule
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
        ]);

        // Insert the document with category
        DocumentsSection::create([ // Corrected the class name
            'document_name'  => $request->document_name,
            'document_type'  => $request->document_type,
            'document_category' => $request->category_name,  // Ensure this field is inserted
            'document_brand'     => $request->brand_name, // Use the correct database column name
            'description'    => $request->description,
            'file_path'      => $request->file_path,
        ]);

        return redirect()->route('admin.documents-sections.index')->with('success', 'Document created successfully.');
    }

    public function edit($id)
    {
        $document = DocumentsSection::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();
        return view('admin.documents-sections.edit', compact('document', 'categories', 'brands'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'document_name' => 'required|string|max:255', // New validation rule
            'document_type' => 'required|string|max:255', // New validation rule
            'category_name' => 'required|string|max:255', // New validation rule
            'brand_name' => 'required|string|max:255', // New validation rule
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
        ]);

        $document = DocumentsSection::findOrFail($id);
        $document->update($request->all());

        return redirect()->route('admin.documents-sections.index')->with('success', 'Document updated successfully.');
    }

    public function destroy($id)
    {
        $document = DocumentsSection::findOrFail($id);
        $document->delete();

        return redirect()->route('admin.documents-sections.index')->with('success', 'Document deleted successfully.');
    }
}

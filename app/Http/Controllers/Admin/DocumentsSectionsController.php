<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\DocumentsSection;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Admin\DocumentsSectionsController;

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
            'type' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
'document_name' => 'required|string|max:255', // New validation rule
            'document_type' => 'required|string|max:255', // New validation rule
        ]);

        DocumentsSection::create($request->all());

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
            'type' => 'required|string|max:255',
            'category_id' => 'required|exists:categories,id',
            'brand_id' => 'nullable|exists:brands,id',
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
'document_name' => 'required|string|max:255', // New validation rule
            'document_type' => 'required|string|max:255', // New validation rule
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

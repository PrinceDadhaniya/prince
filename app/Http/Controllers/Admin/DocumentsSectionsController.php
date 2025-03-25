<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand;
use App\Models\Category;
use App\Models\DocumentType;
use Illuminate\Http\Request;
use App\Models\DocumentBrand;
use App\Models\DocumentCategory;
use App\Models\DocumentsSection;
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
        $categories = DocumentCategory::all();
        $brands = Brand::all();
        $documentTypes = DocumentType::all();
        $documentCategories = DocumentCategory::all();
        $documentBrands = DocumentBrand::all(); // Fetch document brands

        return view('admin.documents-sections.create', compact('categories', 'brands', 'documentTypes', 'documentCategories', 'documentBrands'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'document_name' => 'required|string|max:255',
            'document_type' => 'required|string',
            'document_category' => 'required|string',
            'document_brand' => 'required|string',
            'description' => 'nullable|string',
            'file_path' => 'required|string',
            'documents' => 'required|file|mimes:pdf,doc,docx', // Ensure this rule is correct
        ]);

        // Handle file upload
        if ($request->hasFile('documents')) {
            $file = $request->file('documents');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('documents', $filename, 'public');
        }

        DocumentsSection::create([
            'document_name'  => $request->document_name,
            'document_type'  => $request->document_type,
            'document_category' => $request->document_category,
            'document_brand'     => $request->document_brand,
            'description'    => $request->description,
            'file_path'      => $filePath ?? $request->file_path,
            'documents'      => $filename, // Ensure documents field is set
            'document_file'  => $filename, // Include document_file in creation
        ]);

        return redirect()->route('admin.documents-sections.index')->with('success', 'Document created successfully.');
    }

    public function edit($id)
    {
        $document = DocumentsSection::findOrFail($id);
        $categories = Category::all();
        $brands = Brand::all();
        $documentCategories = DocumentCategory::all();
        $documentTypes = DocumentType::all();
        $documentBrands = DocumentBrand::all();
        return view('admin.documents-sections.edit', compact('document', 'categories', 'brands', 'documentCategories', 'documentTypes', 'documentBrands'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'document_name' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'description' => 'nullable|string',
            'file_path' => 'required|string|max:255',
            'documents' => 'required|string|max:255', // Add validation for documents
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

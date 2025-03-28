<?php

namespace App\Http\Controllers;

use App\Models\Document;
use Illuminate\Http\Request;
use App\Models\DocumentCategory; // Add this line

class DocumentController extends Controller
{
    # ...existing code...

    public function create()
    {
        return view('admin.documents.create');
    }

    public function showCategoryDocuments($category)
    {
        $documents = Document::whereHas('category', function ($query) use ($category) { // Correct the relationship path
            $query->where('name', $category);
        })->get();

        return view('frontend.pages.category-documents', compact('category', 'documents'));
    }

    public function fetchDocumentCategories()
    {
        $documentCategories = DocumentCategory::all();
        return response()->json(['documentCategories' => $documentCategories]);
    }

    public function filterDocuments(Request $request) {
        $query = Document::query();

        if ($request->has('documentcategory')) {
            $query->whereIn('document_category_id', $request->documentcategory);
        }

        if ($request->has('documenttype')) {
            $query->whereIn('document_type_id', $request->documenttype);
        }

        if ($request->has('documentbrand')) {
            $query->whereIn('document_brand_id', $request->documentbrand);
        }

        if ($request->has('search')) {
            $query->where('document_name', 'like', '%' . $request->search . '%');
        }

        $documents = $query->with(['documentType', 'documentCategory', 'documentBrand'])->get();

        return response()->json(['documents' => $documents]);
    }

    public function fetchDocumentTypes() {
        $types = DocumentType::all();
        return response()->json(['documentTypes' => $types]);
    }

    public function fetchDocumentBrands() {
        $brands = DocumentBrand::all();
        return response()->json(['documentBrands' => $brands]);
    }

    # ...existing code...
}

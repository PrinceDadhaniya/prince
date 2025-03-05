<?php

namespace App\Http\Controllers\Admin;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\DocumentCategory;
use App\Http\Controllers\Controller;
use App\Http\Requests\DocumentCategoryFormRequest;

class DocumentCategoryController extends Controller
{
    public function view()
    {
        $categories = DocumentCategory::with('parentCategory')->whereNull('parent_id')->get();
        return view('admin.document-category.index', compact('categories'));
    }

    public function getCategories()
    {
        // Fetch parent categories
        $categories = DocumentCategory::whereNull('parent_id')->get(); // Parent categories where parent_id is null

        // Structure categories with information about whether they have children
        $categories = $categories->map(function ($category) {
            return [
                'id' => $category->id,
                'name' => $category->name,
                'has_children' => $category->children()->exists(),
            ];
        });

        return response()->json(['categories' => $categories]);
    }

    public function getChildren($categoryId)
    {
        // Find the category
        $category = DocumentCategory::find($categoryId);

        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }

        // Fetch children of the category
        $children = $category->children->map(function ($child) {
            return [
                'id' => $child->id,
                'name' => $child->name,
                'has_children' => $child->children()->exists(),
            ];
        });

        return response()->json(['children' => $children]);
    }

    public function index()
    {
        $categories = DocumentCategory::all();
        return view('admin.document-category.index', compact('categories'));
    }

    public function show($id)
    {
        $category = DocumentCategory::find($id);
        if (!$category) {
            return redirect()->route('admin.document-category.index')->with('error', 'Category not found');
        }
        return view('admin.document-category.show', compact('category'));
    }

    public function create()
    {
        $parentCategories = DocumentCategory::whereNull('parent_id')->get();
        return view('admin.document-category.create', compact('parentCategories'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:document_categories',
            'description' => 'nullable|string',
            'serial_number' => 'nullable|integer',
            'parent_id' => 'nullable|exists:document_categories,id',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $category = new DocumentCategory($request->all());

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('document_categories', 'public');
            $category->image = $imagePath;
        }

        $category->save();

        return redirect()->route('admin.document-category.index')->with('message', 'Document Category created successfully.');
    }

    // Show the category editing form
    public function edit($id)
    {
        $category = DocumentCategory::findOrFail($id);
        $parentCategories = DocumentCategory::whereNull('parent_id')->get();
        return view('admin.document-category.edit', compact('category', 'parentCategories'));
    }

    // Update an existing category
    public function update(Request $request, DocumentCategory $category)
    {
        if (!$category) {
            return redirect()->route('admin.document-category.index')->with('error', 'Category not found');
        }
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'description' => 'required|string',
            'serial_number' => 'required|unique:document_categories,serial_number,' . $category->id,
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,avif|max:2048',
            'parent_id' => 'nullable|exists:document_categories,id',
        ]);

        $category->name = $validatedData['name'];
        $category->slug = Str::slug($validatedData['slug']);
        $category->description = $validatedData['description'];
        $category->serial_number = $validatedData['serial_number'];
        $category->parent_id = $validatedData['parent_id'] ?? null;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($category->image && file_exists(public_path('uploads/category/' . $category->image))) {
                unlink(public_path('uploads/category/' . $category->image));
            }

            // Save the new image
            $file = $request->file('image');
            $ext = $file->getClientOriginalExtension();
            $filename = time() . '.' . $ext;
            $path = public_path('uploads/category');
            if (!file_exists($path)) {
                mkdir($path, 0755, true); // Create directory if it doesn't exist
            }
            $file->move($path, $filename);
            $category->image = $filename;
        }

        $category->save();
        return redirect()->route('admin.document-category.index')->with('success', 'Category updated successfully.');
    }

    // Delete a category
    public function destroy(DocumentCategory $category)
    {
        if (!$category) {
            return redirect()->route('admin.document-category.index')->with('error', 'Category not found');
        }
        // Delete category image if exists
        if ($category->image && file_exists(public_path('uploads/category/' . $category->image))) {
            unlink(public_path('uploads/category/' . $category->image));
        }

        // Delete the category record
        $category->delete();

        // Redirect with success message
        return redirect()->route('admin.document-category.index')->with('success', 'Document Category deleted successfully.');
    }

    // In your controller (e.g., CategoryController.php)
    public function filter(Request $request)
    {
        $categories = $request->input('categories', []);
        $brands = $request->input('brands', []);
        $parentId = $request->input('parent_id');

        // Fetch subcategories and products based on filters
        $subcategories = Subcategory::whereIn('id', $categories)->get();
        $products = Product::where('category_id', $parentId)
            ->when(!empty($brands), function ($query) use ($brands) {
                return $query->whereIn('brand_id', $brands); // Filter by brands
            })
            ->get();

        return response()->json([
            'subcategories' => $subcategories,
            'products' => $products,
        ]);
    }
}

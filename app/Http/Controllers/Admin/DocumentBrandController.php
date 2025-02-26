<?php

namespace App\Http\Controllers\Admin;

use App\Models\Brand; // Add this line
use Illuminate\Http\Request;
use App\Models\DocumentBrand;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Database\Schema\Blueprint;

class DocumentBrandController extends Controller
{
    public function index()
    {
        $brands = DocumentBrand::orderBy('serial_number', 'asc')->get();
        return view('admin.document-brand.index', compact('brands'));

    }

    public function create()
    {
        $documentBrand = null;
        $nextSerialNumber = DocumentBrand::max('serial_number') + 1;
        return view('admin.document-brand.create', compact('documentBrand', 'nextSerialNumber'));
    }

    public function form($id = null)
    {
        $existingSerialNumbers = DocumentBrand::orderBy('serial_number', 'asc')->pluck('serial_number')->toArray();

        $nextSerialNumber = $this->getNextAvailableSerialNumber($existingSerialNumbers);
        if ($nextSerialNumber === null) {
            $lastSerialNumber = DocumentBrand::max('serial_number') ?? 0;
            $nextSerialNumber = $lastSerialNumber + 1;
        }
        $documentBrand = $id ? DocumentBrand::findOrFail($id) : null;

        return view('admin.document-brand.create', compact('documentBrand', 'nextSerialNumber'));
    }

    public function save(Request $request, $id = null)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048', // Accepts only image files
            'description' => 'nullable|string',
            'serial_number' => 'required|integer|unique:document_brands,serial_number,' . $id, // Ensure uniqueness, except for the current record (if editing)
        ]);

        $documentBrand = $id ? DocumentBrand::find($id) : new DocumentBrand();

        if (!$documentBrand) {
            return redirect()->route('admin.document-brands.index')
                ->with('error', 'DocumentBrand not found!');
        }

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imagePath = 'document-brands/' . uniqid() . '.' . $image->getClientOriginalExtension();

            if (!$image->move(public_path('document-brands'), $imagePath)) {
                return redirect()->route('admin.document-brands.index')
                    ->with('error', 'Failed to upload the image. Please try again.');
            }

            if ($id && $documentBrand->image) {
                File::delete(public_path('document-brands/' . $documentBrand->image));
            }

            $documentBrand->image = $imagePath;
        }

        $documentBrand->name = $request->name;
        $documentBrand->description = $request->description;
        $documentBrand->serial_number = $request->serial_number;
        $documentBrand->save();
        $existingSerialNumbers = DocumentBrand::orderBy('serial_number', 'asc')->pluck('serial_number')->toArray();
        $nextSerialNumber = $this->getNextAvailableSerialNumber($existingSerialNumbers);
        return redirect()->route('admin.document-brands.index')->with('message', $id ? 'Brand updated successfully!' : 'Brand created successfully!');
    }

    public function delete($id)
    {
        $documentBrand = DocumentBrand::findOrFail($id);
        if ($documentBrand->image) {
            Storage::delete('public/' . $documentBrand->image);
        }
        $documentBrand->delete();
        return redirect()->route('admin.document-brands.index')->with('error', 'Brand deleted successfully!');
    }

    protected function getNextAvailableSerialNumber(array $existingSerialNumbers)
    {
        $nextSerialNumber = null;
        $expected = 1;
        foreach ($existingSerialNumbers as $serialNumber) {
            if ($serialNumber != $expected) {
                $nextSerialNumber = $expected;
                break;
            }
            $expected++;
        }

        return $nextSerialNumber;
    }

    public function show($id)
    {
        $category = Category::findOrFail($id);
        $childCategories = Category::where('parent_id', $id)->get();
        $relatedBrands = Brand::whereIn('id', $category->products->pluck('brand_id'))->get();

        \Log::info('Related Brands:', $relatedBrands->toArray());

        return view('categories.show', [
            'category' => $category,
            'childCategories' => $childCategories,
            'relatedBrands' => $relatedBrands,
        ]);
    }

    public function filterCategories(Request $request)
    {
        $categoryIds = $request->has('categories') ? explode(',', $request->categories) : [];
        $brandIds = $request->has('brands') ? explode(',', $request->brands) : [];

        $productsQuery = Product::query();

        // Filter by categories (if selected)
        if (!empty($categoryIds)) {
            $productsQuery->whereIn('category_id', $categoryIds);
        }

        // Filter by brands (if selected)
        if (!empty($brandIds)) {
            $productsQuery->whereIn('brand_id', $brandIds);
        }

        $products = $productsQuery->get();

        \Log::info('Filtered Brands:', $brandIds); // Debugging line
        \Log::info('Products:', $products->toArray()); // Debugging line

        return response()->json([
            'products' => $products
        ]);
    }

    public function edit($id)
    {
        $documentBrand = DocumentBrand::findOrFail($id);
        return view('admin.document-brand.edit', compact('documentBrand'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $documentBrand = DocumentBrand::findOrFail($id);
        $documentBrand->name = $request->input('name');
        $documentBrand->description = $request->input('description');

        if ($request->hasFile('image')) {
            $imagePath = $request->file('image')->store('document-brands', 'public');
            $documentBrand->image = $imagePath;
        } elseif ($request->input('existing_image')) {
            $documentBrand->image = $request->input('existing_image');
        }

        $documentBrand->save();

        return redirect()->route('admin.document-brands.index')->with('success', 'Document Brand updated successfully.');
    }

    public function destroy($id)
    {
        $documentBrand = DocumentBrand::findOrFail($id);
        if ($documentBrand->image) {
            Storage::delete('public/' . $documentBrand->image);
        }
        $documentBrand->delete();
        return redirect()->route('admin.document-brands.index')->with('message', 'Document Brand deleted successfully.');
    }
}

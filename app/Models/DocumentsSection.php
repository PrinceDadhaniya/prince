<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        // 'type',
        // 'product_id',
        // 'category_id',
        // 'brand_id',
        'document_name', // New field
        'document_type', // New field
        'document_category',
        'document_brand',
        'description',
        'file_path',
    ];

    public static function rules()
    {
        return [
            // 'product_id' => 'required',
            // 'category_id' => 'exists:categories,id',
            // 'type' => 'required',
            // 'document_name' => 'required|string|max:255', // New validation rule
            // 'document_type' => 'required|string|max:255', // New validation rule


            'document_name' => 'required|string|max:255', // New validation rule
            'document_type' => 'required|string|max:255', // New validation rule
            'document_category' => 'required|string|max:255', // New validation rule
            'document_brand' => 'required|string|max:255', // New validation rule
        ];
    }

    public static function messages()
    {
        return [
            // 'product_id.required' => 'The product id field is required.',
            // 'category_id.exists' => 'The selected category id is invalid.',
            // 'type.required' => 'The type field is required.',
            // 'document_name.required' => 'The document name field is required.', // New error message
            // 'document_type.required' => 'The document type field is required.', // New error message

            'document_name.required' => 'The document name field is required.', // New error message
            'document_type.required' => 'The document type field is required.', // New error message
            'document_category.required' => 'The document category field is required.', // New error message
            'document_brand.required' => 'The document type brand is required.', // New error message
        ];
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function brand()
    {
        return $this->belongsTo(Brand::class);
    }
}

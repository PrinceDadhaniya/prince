<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_name', // New field
        'document_type', // New field
        'document_category',
        'document_brand',
        'description',
        'file_path',
        'documents', // New field
    ];

    public static function rules()
    {
        return [
            'document_name' => 'required|string|max:255', // New validation rule
            'document_type' => 'required|string|max:255', // New validation rule
            'document_category' => 'required|string|max:255', // New validation rule
            'document_brand' => 'required|string|max:255', // New validation rule
            'document_file' => 'required', // New validation rule
            'documents' => 'required|file|mimes:pdf,doc,docx',
        ];
    }

    public static function messages()
    {
        return [
            'document_name.required' => 'The document name field is required.', // New error message
            'document_type.required' => 'The document type field is required.', // New error message
            'document_category.required' => 'The document category field is required.', // New error message
            'document_brand.required' => 'The document type brand is required.', // New error message
            'document_file.required' => 'The document file field is required.', // New error message
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

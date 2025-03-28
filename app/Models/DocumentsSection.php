<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentsSection extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_name',
        'document_type',
        'document_category',
        'document_brand',
        'description',
        'file_path',
        'documents',
    ];

    public static function rules()
    {
        return [
            'document_name' => 'required|string|max:255',
            'document_type' => 'required|string|max:255',
            'document_category' => 'required|string|max:255',
            'document_brand' => 'required|string|max:255',
            'document_file' => 'required',
            'documents' => 'required|file|mimes:pdf,doc,docx',
        ];
    }

    public static function messages()
    {
        return [
            'document_name.required' => 'The document name field is required.',
            'document_type.required' => 'The document type field is required.',
            'document_category.required' => 'The document category field is required.',
            'document_brand.required' => 'The document type brand is required.',
            'document_file.required' => 'The document file field is required.',
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

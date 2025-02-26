<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DocumentsSections extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
        'product_id',
        'category_id',
        'brand_id',
        'description',
        'file_path',
        'document_name', // New field
        'document_type', // New field
    ];

    public static function rules()
    {
        return [
            'product_id' => 'required',
            'category_id' => 'exists:categories,id',
            'type' => 'required',
        ];
    }

    public static function messages()
    {
        return [
            'product_id.required' => 'The product id field is required.',
            'category_id.exists' => 'The selected category id is invalid.',
            'type.required' => 'The type field is required.',
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

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Document extends Model
{
    use HasFactory;

    protected $fillable = [
        'document_name',
        'document_type',
        'category_name',
        'brand_name',
        'description',
        'file_path',
    ];

    public function category() {
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class, 'brand_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class,'product_id');
    }
}

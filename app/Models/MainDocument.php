<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MainDocument extends Model
{
    use HasFactory;

    protected $table = 'main_documents';

    protected $fillable = [
        'product_id',
        'type',
        'title',
        'description',
        'file_path',
    ];

    public function product()
    {
        return $this->hasMany(Product::class, 'product_id');
    }

}

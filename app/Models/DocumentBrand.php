<?php

namespace App\Models;

use App\Models\DocumentBrand;
use Illuminate\Database\Eloquent\Model;

class DocumentBrand extends Model
{

    protected $table = 'document_brand';
    protected $fillable = [
        'name',
        'image',
        'description',
        'serial_number',
    ];
}
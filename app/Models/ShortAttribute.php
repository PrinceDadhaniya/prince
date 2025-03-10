<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShortAttribute extends Model
{
    use HasFactory;

    protected $fillable = ['attribute_id', 'key', 'value'];

    public function attribute()
    {
        return $this->belongsTo(Attribute::class);
    }
}

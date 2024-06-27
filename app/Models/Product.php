<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    public function getFlagAttribute($image)
    {
        return $image ? asset('storage/' . $image) : null;
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function hsnCode()
    {
        return $this->belongsTo(HsnCode::class);
    }
}

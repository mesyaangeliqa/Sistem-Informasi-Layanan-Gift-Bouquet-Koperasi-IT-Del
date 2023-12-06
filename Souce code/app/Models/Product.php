<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $timesetamps = false;
    public function product()
    {
        return $this->belongsTo(ProductCategory::class,'id_product_category','id');
    }

    public function getImageAttribute()
    {
        return asset('storage/' . $this->image_product);
    }
}
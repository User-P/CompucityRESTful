<?php

namespace App;

use App\Product;

class ProductDetail extends Model
{
    protected $fillable = [
        'name',
        'price',
        'description',
        'image',
        'product_id',
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

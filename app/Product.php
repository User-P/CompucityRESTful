<?php

namespace App;

use App\Brand;
use App\Category;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    const PRODUCT_AVAILABLE = 'Disponible';
    const PRODUCT_NOT_AVAILABLE  = 'No disponible';

    protected $fillable = [
        'category_id',
        'brand_id',
        'quantity_stock',
        'status'
    ];

    public function available(){
        return $this->status == Product::PRODUCT_AVAILABLE;
    }

    public function category(){
        return $this->belongsTo(Category::class);
    }

    public function brand(){
        return $this->belongsTo(Brand::class);
    }
}

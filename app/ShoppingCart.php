<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    protected $fillable = [
        'customer_id',
        'product_id',
        'quantity'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}

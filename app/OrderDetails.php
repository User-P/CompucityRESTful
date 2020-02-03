<?php

namespace App;

use App\Order;
use App\Product;
use Illuminate\Database\Eloquent\Model;

class OrderDetails extends Model
{
    protected $fillable = [
        'product_id',
        'price',
        'description',
        'quantity_products',
        'estimated_delivery',
        'delivery_date',
        'order_id'
    ];

    public function order(){
        return $this->belongsTo(Order::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}

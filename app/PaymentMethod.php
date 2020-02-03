<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'Clave'
    ];

    public function order(){
        return $this->hasMany(Order::class);
    }
}

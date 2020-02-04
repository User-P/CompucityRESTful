<?php

namespace App;

use App\Order;
use Illuminate\Database\Eloquent\Model;

class PaymentMethod extends Model
{
    protected $fillable = [
        'Clave'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }
}

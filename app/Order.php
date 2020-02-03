<?php

namespace App;

use App\Address;
use App\Customer;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total',
        'customer_id',
        'address_id',
        'payment_method_id',
        'status'
    ];

    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public function address(){
        return $this->belongsTo(Address::class);
    }

    public function payment_method(){
        return $this->belongsTo(PaymentMethod::class);
    }
}

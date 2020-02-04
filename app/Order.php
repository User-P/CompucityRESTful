<?php

namespace App;

use App\Address;
use App\Customer;
use App\OrderDetails;
use App\PaymentMethod;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{

    const SENT = 'Enviado';
    const DELIVERED = 'Entregado';
    const CALCELLED  = 'Cancelado';
    const RETURNED = 'Devuelto';


    protected $fillable = [
        'total',
        'user_id',
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

    public function orderDetails(){
        return $this->hasMany(OrderDetails::class);
    }

}

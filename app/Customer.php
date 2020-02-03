<?php

namespace App;

use App\User;
use App\Order;
use App\Address;
use App\ShoppingCart;

class Customer extends User
{
    //hasMany Relacion uno a muchos
    public function address(){
        return $this->hasMany(Address::class);
    }

    public function shoppingCart(){
        return $this->hasMany(ShoppingCart::class);
    }

    public function order(){
        return $this->hasMany(Order::class);
    }

}

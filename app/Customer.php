<?php

namespace App;

use App\User;
use App\Order;
use App\Address;
use App\ShoppingCart;

class Customer extends User
{
    //hasMany Relacion uno a muchos
    public function addresses(){
        return $this->hasMany(Address::class);
    }

    public function shoppingCarts(){
        return $this->hasMany(ShoppingCart::class);
    }

    public function orders(){
        return $this->hasMany(Order::class);
    }

}

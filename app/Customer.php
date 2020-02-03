<?php

namespace App;

use App\User;
use App\Address;
use App\ShoppingCart;

class Customer extends User
{
    protected $fillable = [
        'name',
        'last_name',
        'phone',
    ];
    //hasMany Relacion uno a muchos
    public function address(){
        return $this->hasMany(Address::class);
    }

    public function shoppingCart(){
        return $this->hasMany(ShoppingCart::class);
    }

}

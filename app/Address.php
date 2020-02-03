<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $fillable = [
        'reference_name',
        'street',
        'city',
        'state',
        'number',
        'country',
        'postal_code',
        'customer_id'
    ];

}

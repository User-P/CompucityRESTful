<?php

namespace App;

use App\User;
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

    public function user(){
        return $this->belongsTo(User::class);
    }

}

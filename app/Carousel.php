<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carousel extends Model
{
    protected $fillable = [
        'name',
        'img1',
        'img2',
        'img3'
    ];
}

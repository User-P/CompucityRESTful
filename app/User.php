<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    const ADMIN = 'true';
    const NO_ADMIN = 'false';

    protected $table = 'users';

   // protected $table = 'user';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'last_name',
        'email',
        'phone',
        'email_verified_at',
        'password',
        'admin',
    ];

    public function setNameAttribute($value){
        $this->attributes['name'] = strtolower($value);
    }

    public function getNameAttribute($value){
        return ucwords($value);
    }

    public function setEmailAttribute($value){
        $this->attributes['email'] = strtolower($value);
    }


    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verified_at',
        'admin'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function esAdmin()
    {
        return $this->admin == User::ADMIN;
    }

    public function customer(){
        return $this->hasMany(Customer::class);
    }
}

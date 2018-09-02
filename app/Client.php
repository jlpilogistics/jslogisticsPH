<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'lastName',
        'firstName',
        'company',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'zip'
    ];

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
    public function users(){
        return $this->hasMany('App\User');
    }
}

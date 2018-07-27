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

    public function quotation(){
        return $this->hasMany('App\Quotation');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
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
        'zip',
        'postal'
    ];
    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
}

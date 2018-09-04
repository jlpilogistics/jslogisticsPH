<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = [

      '_token', 'charge', 'amount', 'list'
    ];
}

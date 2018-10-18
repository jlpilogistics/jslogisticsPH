<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $fillable = [

      'avail',
      'driver_id'
    ];

    public function driver(){
        return $this->belongsTo('App\Driver');
    }
}

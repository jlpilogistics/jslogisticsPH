<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Charge extends Model
{
    public function mode(){
        return $this->belongsTo('App\Mode');
    }
}

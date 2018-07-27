<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sender extends Model
{
    public function quotation(){
        return $this->hasMany('App\Quotation');
    }
}

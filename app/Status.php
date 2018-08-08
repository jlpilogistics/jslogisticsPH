<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    public function quotation(){
        return $this->hasMany('App\Quotation');
    }
}

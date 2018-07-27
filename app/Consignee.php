<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Consignee extends Model
{
    public function quotation(){
        return $this->hasMany('App\Quotation');
    }
}

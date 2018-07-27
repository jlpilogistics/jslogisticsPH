<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shiptype extends Model
{
        public function quotations(){
            return $this->belongsToMany('App\Quotation')->withPivot('shiptype_id');
        }
}

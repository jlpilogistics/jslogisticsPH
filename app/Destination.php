<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }
}

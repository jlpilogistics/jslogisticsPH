<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }
}

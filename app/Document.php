<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }
}

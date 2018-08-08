<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'quotation_id',
        'goods',
        'name',
        'term',
        'danger',
        'temp',
        'description',
    ];
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }

    public function goods($yes){

        return $yes;
    }
}

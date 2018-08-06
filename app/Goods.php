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
        'message'
    ];
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }
}

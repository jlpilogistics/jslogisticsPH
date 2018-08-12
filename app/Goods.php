<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Goods extends Model
{
    protected $fillable = [
        'transaction_id',
        'goods',
        'name',
        'term',
        'danger',
        'temp',
        'description',
        'shiptypes',
        'mode',
        'aweight',
        'avolume',
    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }


}

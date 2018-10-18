<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ihaulage extends Model
{
    protected $fillable = [
        'unloading',
        'eta',
        'delivery_date',
        'delivery_time',
        'transaction_id',
    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
}

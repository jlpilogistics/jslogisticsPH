<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Monitor extends Model
{
    protected $fillable = [
         'status',
        'transaction_id',
        'location',
        'datetime',
        'place_id',
        'remarks'
    ];

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }
}

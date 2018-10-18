<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ehaulage extends Model
{
    protected $fillable = [
        'transaction_id',
        'loading',
        'zip',
        'street',
        'city',
        'state',
        'pickup_date',
        'pickup_time',
        'vehicle_id',
    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
}

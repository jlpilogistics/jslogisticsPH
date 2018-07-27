<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Quotation extends Model
{

    protected $fillable = [
        'clientId',
        'mode',
        'container',
        'length',
        'width',
        'height',
        'weight',
        'quantity',
        'commodity',
        'message'
    ];

    public function clients(){
        return $this->belongsTo('App\Client');
    }
    public function shiptypes(){
        return $this->belongsToMany('App\ShipType');
    }

    public function getCreatedAtAttribute($value) {
//        return Carbon::parse($value)->toDayDateTimeString();
        return Carbon::parse($value)->diffForHumans();
    }
}

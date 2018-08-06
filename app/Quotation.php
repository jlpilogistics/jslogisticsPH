<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Quotation extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'client_id',
        'mode',
        'package',
        'length',
        'width',
        'height',
        'weight',
        'quantity',
        'aweight',
        'avolume',
        'dimused',
        'message',
        'shiptypes'
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

    public function destination(){
        return $this->hasOne('App\Destination');
    }
    public function document(){
        return $this->hasOne('App\Document');
    }
    public function origin(){
        return $this->hasOne('App\Origin');
    }
    public function good(){
        return $this->hasMany('App\Goods');
    }
}


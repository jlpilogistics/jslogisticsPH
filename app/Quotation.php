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
    public function status(){
        return $this->belongsTo('App\Status');
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
    public function requestQuote($client, $quote){
            $this->client_id = $client->id;
            $this->shiptypes = 'Import';
            $this->mode = 'FCL20';
            $this->package = $quote->package;
            $this->quantity = $quote->quantity;
            $this->length = $quote->length;
            $this->width = $quote->width;
            $this->height = $quote->height;
            $this->weight = $quote->weight;
            $this->aweight = '1000';
            $this->avolume = '1000';
            $this->dimused = $quote->dimused;
            $this->save();
    }
}


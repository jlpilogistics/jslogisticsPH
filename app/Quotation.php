<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Quotation extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'client_id',
        'package',
        'length',
        'width',
        'height',
        'weight',
        'quantity',
        'dimused',
        'status_id',
        'transaction_id'
    ];

    public function shiptypes(){
        return $this->belongsToMany('App\ShipType');
    }

    public function getCreatedAtAttribute($value) {
//        return Carbon::parse($value)->toDayDateTimeString();
        return Carbon::parse($value)->diffForHumans();
    }

    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
    public function requestQuote($client, $quote, $transact){
            $this->transaction_id = $transact->id;
            $this->client_id = $client->id;
            $this->package = $quote->package;
            $this->quantity = $quote->quantity;
            $this->length = $quote->length;
            $this->width = $quote->width;
            $this->height = $quote->height;
            $this->weight = $quote->weight;
            $this->dimused = $quote->dimused;
            $this->save();
    }
}


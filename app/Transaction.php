<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use SanderVanHooft\Invoicable\IsInvoicable\IsInvoicableTrait;

class Transaction extends Model
{

    use IsInvoicableTrait;

    public function generateTransaction() {
        $number = mt_rand(10000000, 99999999); // better than rand()
        return $number;
    }


    public function getCreatedAtAttribute($value)
    {
        return Carbon::parse($value)->toDayDateTimeString();
    }

    public function destination(){
        return $this->hasOne('App\Destination');
    }
    public function origin(){
        return $this->hasOne('App\Origin');
    }
    public function quotation(){
        return $this->hasMany('App\Quotation');
    }
    public function goods(){
        return $this->hasOne('App\Goods');
    }
    public function clients(){
            return $this->belongsTo('App\Client');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }




}

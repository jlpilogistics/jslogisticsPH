<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function generateTransaction() {
        $number = mt_rand(10000000, 99999999); // better than rand()
        return $number;
    }

    public function destination(){
        return $this->hasOne('App\Destination');
    }
    public function origin(){
        return $this->hasOne('App\Origin');
    }
    public function quotation(){
        return $this->hasOne('App\Quotation');
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

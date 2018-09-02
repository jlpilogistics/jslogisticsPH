<?php

namespace App;

use Carbon\Carbon;
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
        'insurance',
        'currency',
        'mode',
        'aweight',
        'avolume',
    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }

    public function getCreatedAtAttribute($value) {
//        return Carbon::parse($value)->toDayDateTimeString();
        return Carbon::parse($value)->diffForHumans();
    }


}

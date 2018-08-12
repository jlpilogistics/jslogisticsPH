<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'transaction_id',
        'dzip',
        'dcountry',
        'dcity',
        'dport',
        'deta',
    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
    public function getDetaAttribute($value)
    {
        return Carbon::parse($value)->toFormattedDateString();
    }
}

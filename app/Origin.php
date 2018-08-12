<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'transaction_id',
        'zip',
        'country',
        'city',
        'port',
        'etd',

    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }

    public function getEtdAttribute($value)
    {
        return Carbon::parse($value)->toFormattedDateString();
    }
}

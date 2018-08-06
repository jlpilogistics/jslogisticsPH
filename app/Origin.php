<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Origin extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'quotation_id',
        'zip',
        'country',
        'city',
        'port',
        'etd',

    ];
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }
}

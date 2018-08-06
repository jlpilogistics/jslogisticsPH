<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{
    protected $guarded=[];
    protected $fillable = [
        'quotation_id',
        'dzip',
        'dcountry',
        'dcity',
        'dport',
        'deta',
    ];
    public function quotation(){
        return $this->belongsTo('App\Quotation');
    }
}

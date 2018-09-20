<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Document extends Model
{
    protected $fillable =[
        'file',
        'transaction_id'
    ];
    public function transaction(){
        return $this->belongsTo('App\Transaction');
    }
}

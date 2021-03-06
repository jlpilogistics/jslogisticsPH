<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use SanderVanHooft\Invoicable\IsInvoicable\IsInvoicableTrait;

class Transaction extends Model
{

    use IsInvoicableTrait;

    protected $with = ['invoices'];
    protected $fillable = ['status_id'];

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
        return $this->hasOne(   'App\Goods');
    }
    public function clients(){
        return $this->belongsTo('App\Client');
    }
    public function consignee(){
        return $this->belongsTo('App\Consignee');
    }
    public function status(){
        return $this->belongsTo('App\Status');
    }
    public function documents(){
        return $this->hasMany('App\Document');
    }
    public function import_haulage(){
        return $this->hasOne('App\Ihaulage');
    }
    public function export_haulage(){
        return $this->hasOne('App\Ehaulage');
    }




}

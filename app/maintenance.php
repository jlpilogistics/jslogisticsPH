<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class maintenance extends Model
{
    protected $fillable =[

        'date',
        'description',
        'vModel',
        'total',

    ];

    protected $table= 'maintenances';
}

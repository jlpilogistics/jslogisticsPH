<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fuel extends Model
{
    protected $fillable =[

        'fuel_date',
        'plate_no',
        'driver',
        'price',
        'fill',
        'cost',

        ];

    protected $table= 'fuels';
}

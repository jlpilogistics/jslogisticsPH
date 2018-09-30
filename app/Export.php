<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Export extends Model
{
    public function rateCharge($title, $mode, $brate) {
        if(($title == 'Export') && ($mode == 'FCL40')){
            $rates = $this->where('oceanfreight', 1)->where('particulars', 'Brokerage Fee')->first();
            $rates->fcl40 = $brate;
            $rates->save();
        }
        if(($title == 'Export') && ($mode == 'FCL20')){
            $rates = $this->where('oceanfreight', 1)->where('particulars', 'Brokerage Fee')->first();
            $rates->fcl20 = $brate;
            $rates->save();
        }
        if(($title == 'Export') && ($mode == 'Air')){
            $rates = $this->where('airfreight', 1)->where('particulars', 'Brokerage Fee')->first();
            $rates->air = $brate;
            $rates->save();
        }
    }
}

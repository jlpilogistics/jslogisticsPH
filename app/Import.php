<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Import extends Model
{
    public function importRates($title, $mode, $brate) {
        if(($title == 'Import') && ($mode == 'FCL40')){
            $rates = $this->where('oceanfreight', 1)->where('particulars', 'Brokerage Fee')->first();
            $rates->fcl40 = $brate;
            $rates->save();
        }
        if(($title == 'Import') && ($mode == 'FCL20')){
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

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Client extends Model
{

    use Notifiable;

    protected $fillable = [
        'lastName',
        'firstName',
        'company',
        'email',
        'phone',
        'address',
        'city',
        'country',
        'zip'
    ];

    public function transaction(){
        return $this->hasMany('App\Transaction');
    }
    public function users(){
        return $this->hasMany('App\User');
    }

    public function getNameInitials($name) {

        preg_match_all('#(?<=\s|\b)\pL#u', $name, $res);
        $initials = implode('', $res[0]);

        if (strlen($initials) < 2) {
            $initials = strtoupper(substr($name, 0, 2));
        }

        return strtoupper($initials);
    }
}

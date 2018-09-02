<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'client_id', 'email', 'password', 'verified','name'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function verifyUser()
    {
        return $this->hasOne('App\VerifyUser');
    }
    public function role(){
        return $this->belongsTo('App\Role');
    }

    public function client(){
        return $this->belongsTo('App\Client');
    }
}

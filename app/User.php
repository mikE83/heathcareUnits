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
        'name', 'username', 'password','lastname1','lastname2'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */

    public function nombreCompleto(){
         return $this->name.' '. $this->lastname1.' '.$this->lastname2;
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}

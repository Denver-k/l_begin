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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    public function setNameAttribute($value){
        $this->attributes['name'] = ucfirst($value);
    }
    
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }
    /*setNameAttribute, setPasswordAttribute это методы Mutators  которые вызываются предворительно перед сохранение в БД, это сетеры и Name, Password это имена полей в БД.*/

    public function getEmailAttribute($value){
        return strtoupper($value);
    }
}



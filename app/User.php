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
    protected $table = 'students';
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
    public function valGender(){
        print_r($this->attributes);
    }
    public function getgenderFakeAttribute()
    {
        if($this->gender == 1)
            $gender = 'Male';
        else
            $gender ="Female";
                
        return $gender;
    }
    
}

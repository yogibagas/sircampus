<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'nim','name','dob','phone','address','gender','password',
        ];

    protected $hidden = ['password',  'remember_token'];
    public function identity(){
        return 'nim';
    }
}

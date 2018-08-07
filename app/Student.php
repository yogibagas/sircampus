<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Student extends Model
{
    use Notifiable;

    protected $table = 'teachers';

    protected $fillable = [
        'nim','name','dob','phone','address','gender','password',
        ];

    protected $hidden = ['password',  'remember_token'];
}

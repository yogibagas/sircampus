<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

<<<<<<< HEAD
class Student extends Authenticatable
{
    use Notifiable;

=======
class Student extends Model
{
    use Notifiable;

    protected $table = 'teachers';

>>>>>>> 5e604aefcf6c86a7139127a8ee898aedbe800d78
    protected $fillable = [
        'nim','name','dob','phone','address','gender','password',
        ];

    protected $hidden = ['password',  'remember_token'];
<<<<<<< HEAD
    public function identity(){
        return 'nim';
    }
=======
>>>>>>> 5e604aefcf6c86a7139127a8ee898aedbe800d78
}

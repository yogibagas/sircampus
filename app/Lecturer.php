<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lecturer extends Model
{
    //

    protected $fillable = [
        'name','gender','dob','phone','address','idCourses'
    ];
    
    public function courses(){
        return $this->belongsTo('App\Course','idCourses')->withDefault();
    }
    public function klas(){ 
         return belongsToMany(Lecturer::class,'Schedule');
     }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Klas extends Model
{
    //
    protected $table = 'classes';
    
    protected $fillable = [
        'name','maxPerson'
    ];
    
    public function students(){
         return $this->hasOne('App\User','id');
    }
     public function lecturers(){ 
         return belongsToMany(Lecturer::class,'Schedule');
     }
}

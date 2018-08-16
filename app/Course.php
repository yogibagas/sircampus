<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    //
    protected $fillable = [
        'name'
    ];
    
    public function lecturers(){
        return $this->hasOne('App\Lecture','id');
    }
}

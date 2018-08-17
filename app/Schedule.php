<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Schedule extends Model
{
    //
    protected $fillable = [
        'firstDate','timeStart','duration','class_id','lecture_id'
    ];
    
    public function classes(){
        return $this->belongsTo('App\Klas','class_id');
    }
    public function lecturers(){
        return $this->belongsTo('App\Lecturer','lecture_id');
    }
}

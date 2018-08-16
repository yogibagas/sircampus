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
    
    public function Students(){
         return $this->hasOne('App\User','id');
    }
}

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
        'nim', 'name', 'password','gender','dob','phone','address','class_id'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getgenderFakeAttribute()
    {
        if($this->gender == 1)
            $gender = 'Male';
        else
            $gender ="Female";
                
        return $gender;
    }
    public function getfakeStatusAttribute(){
        if($this->status == 1)
                $status = 'Active';
        else
            $status = 'Deactive';
        
        return $status;
    }
    
    public function Klas(){
         return $this->hasOne('App\Klas','id');
    }
    
}

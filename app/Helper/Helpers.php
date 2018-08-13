<?php
namespace App\Helper;
use Carbon\Carbon;
class Helpers{
    public static function formatDate($format = 'd m Y',$value=null){
       return Carbon::parse($value)->format($format);
    }
    public static function getFake($value=null,$msg=null,$false=null){
        if($value == 1)
                $status = $msg;
        else
            $status = $false;
        
        return $status;
    }
    
}
?>
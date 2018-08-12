<?php
namespace App\Helper;
use Carbon\Carbon;
class Helpers{
    public static function formatDate($format = 'd m Y',$value=null){
       return Carbon::parse($value)->format($format);
    }
    
}
?>
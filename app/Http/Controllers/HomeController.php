<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Klas;
use App\Lecturer;
use Carbon\Carbon;
use Helper;
use Auth;
use DateTime;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Schedule::orderBy('class_id','asc')
                ->orderBy('firstDate','desc')->with('classes')->with('lecturers')->get();
        
        return view('home')->with('data',$data);
    }
    
}

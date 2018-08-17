<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Staff;
use Carbon\Carbon;
use Auth;

class StaffController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $total = User::get()->count();
        $mhsnow = User::query()->whereYear('created_at',Carbon::now()->year)->count();
        $admin = Staff::get()->count();
        $mhs = [
            'total'=>$total,
            'thisYear'=>$mhsnow,
            'admin'=>$admin
        ];
        return view('staff.welcome')->with('mhs',$mhs);
    }
}

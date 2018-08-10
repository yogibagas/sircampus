<?php

namespace App\Http\Controllers\Auth\Student;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;    
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Student;

use DB;
use App\Quotation;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest.student')->except('logout');
    }
    
    public function showLoginForm(){
        return view('auth.login');
    }
    public function username()
    {
        return 'nim';
    }

    public function guard(){
        return \Auth::guard('students');
    }
    
    public function login(Request $req) {
    $nim = $req->input('identity');

    $checkLogin = DB::table('students')->where(['nim'=>$nim])->first();

    $password = Hash::check($req->input('password'), $checkLogin->password);
    if(count($checkLogin) > 0 && $password) {
        echo "Login Successfull";
        
dd(Auth::guard());
    }
    else {
dd('fail');
        // echo "Login Failed!";
//        return redict()->back()->with('status','Login Failed');
    }
}
    
    
    public function logout (Request $request){
       $this->guard()->logout();
        $request->session()->flush();
        $request->session()->regenerate();

        return redirect()->route('/login');
    }
}

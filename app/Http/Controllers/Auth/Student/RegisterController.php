<?php

namespace App\Http\Controllers\Auth\Student;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/staff';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            'identity' => 'required|string|max:255|unique:staffs',
            'password' => 'required|string|min:6|confirmed',
            'dob'=>'required|date',
            'gender'=>'required|boolean',
            'phone'=>'required|string',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return dd($data);
    }
    public function register(\Illuminate\Http\Request $request) {
        //dd($request->toArray());
        $store = [
            'name'=>$request->name,
            'identity'=>$request->identity,
            'password'=> Hash::make($request->password),
            'dob'=>$request->dob,
            'gender'=>$request->gender,
            'phone'=>$request->phone
        ];
        $do=User::create($store);
        if($do)
        return redirect('/staff/login')->with('status', 'Success Create your account');
    }
    
    public function showRegistrationForm() {
        $staffs = User::get()->count();
        $total = $staffs+1;
        
        return view('auth.staff.register')->with('index',$total);
    }
}

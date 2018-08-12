<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Carbon\Carbon;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = User::orderBy('status')->get();
        return view('staff.students.student')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $nim = 1+User::query()->whereYear('created_at',Carbon::now()->year)->count();
        $model = new User();
        return view('staff.students.form')->with('nim',$nim)
                ->with(compact('model',$model));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $validator      = \Validator::make($request->all(),[
            'nim'=> 'required|unique:users|max:20',
            'name'=>'required',
            'password' => 'required|string|min:6|confirmed',
            'gender'=>'required',
            'dob'=>'required',
            'phone'=>'required|numeric',
            'address'=>'required'
        ]);
        
        
        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
        }
        $data = [
          'nim' => $request->nim,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address
        ];
        
       User::create($data);
        \Session::flash('success','Mahasiswa with nim '.$request->nim.' successfully created');
        return redirect()->route('student.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $model = User::findOrFail($id);
        
        $nim = $model->nim;
        return view('staff.students.form')->with('nim',$nim)
                ->with(compact('model',$model));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $validator      = \Validator::make($request->all(),[
            'nim'=> 'required|max:20|unique:users,nim,'.$id,
            'name'=>'required',
            'password' => 'required|string|min:6|confirmed',
            'gender'=>'required',
            'dob'=>'required',
            'phone'=>'required|numeric',
            'address'=>'required'
        ]);
        
        
        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
        }
        $data = [
          'nim' => $request->nim,
            'name' => $request->name,
            'password' => bcrypt($request->password),
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address
        ];
        $user = User::findOrFail($id)->update($data);
        \Session::flash('success','Mahasiswa with nim '.$request->nim.' successfully updated');
        return redirect()->route('student.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //
        $user = User::findOrFail($id);
        if($user->status == 1){
            $user->status = 0;
            $msg = "Deactive";
        }
        else{
            $user->status = 1;
            $msg = "Active";
        }
        
        $user->save();
        \Session::flash('success','Mahasiswa with nim '.$user->nim.' turned to '.$msg.' mahasiswa');
        return redirect()->route('student.index');
    }
}

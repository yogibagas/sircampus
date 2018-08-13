<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lecturer;

class LectureController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lecture = Lecturer::orderBy('id','desc')->orderBy('status','asc')->get();
        return view('staff.lecture.lecture')
        ->with(compact('lecture',$lecture));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Lecturer();
        return view('staff.lecture.form')->with(compact('model',$model));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator      = \Validator::make($request->all(),[
            'name'=>'required',
            'gender'=>'required',
            'dob'=>'required',
            'phone'=>'required|numeric',
            'address'=>'required'
        ]);
        
        
        if($validator->fails()){
            return redirect()->back()->withInput($request->all())->withErrors($validator->errors());
        }
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address
        ];
        $lecture = Lecturer::create($data);
        \Session::flash('success','Lecture with name '.$request->name.' successfully created');
        return redirect()->route('lecture.index');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
    public function delete($id){
    	$data = Lecturer::findOrFail($id);
    	if($data->status == 1){
    		$data->status = 0;
    		$msg = "Deactive";
    	}
    	else{
    		$data->status = 1;
    		$msg = "Active";
    		} 

        $data->save();
        \Session::flash('success','Lecture with name '.$data->name.' turned to '.$msg.' Status');
        return redirect()->route('lecture.index');	
    }
}

<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Lecturer;
use App\Course;
use Carbon\Carbon;

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
        $lecture = Lecturer::orderBy('id','asc')->orderBy('status','asc')->with('courses')->get();
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
        $course = Course::get()->where('status',1);
        return view('staff.lecture.form')->with(compact('model',$model))
                ->with('course',$course);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Staff\Lecture\StoreRequest $request)
    {
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address,
            'idCourses'=>$request->idCourses
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
        $lecture = Lecturer::where('id',$id)->orderBy('id','asc')
                ->orderBy('status','asc')
                ->with('courses')->first();
        return response()->json($lecture);
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
        $model = Lecturer::findOrFail($id);
        $course = Course::get()->where('status',1);
        //dd($model->toArray());
        return view('staff.lecture.form')->with(compact('model',$model))
                ->with('course',$course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Staff\Course\StoreRequest $request, $id)
    {
        $data = [
            'name' => $request->name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'phone' => $request->phone,
            'address' => $request->address,
            'idCourses'=>$request->idCourses
        ];
        $model = Lecturer::find($id)->update($data);
        \Session::flash('success','Lecture with name '.$request->name.' successfully updated');
        return redirect()->route('lecture.index');
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

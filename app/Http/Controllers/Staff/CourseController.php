<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Course;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Course::orderBy('id','asc')->where('status',1)->get();
        return view('staff.course.course')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $model = new Course();
        return view('staff.course.form')->with(compact('model',$model));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Staff\Course\StoreRequest $request)
    {  
        $data = [
            'name' => $request->name,
        ];
        
        $course = Course::create($data);
        \Session::flash('success',$request->name.' Course successfully created');
        return redirect()->route('course.index');
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
        $model = Course::findOrFail($id);
        return view('staff.course.form')->with(compact('model',$model));
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
        //
        $data = [
            'name' => $request->name
        ];
        
        $model = Course::find($id)->update($data);
        \Session::flash('success',$request->name.' Course Updateed created');
        return redirect()->route('course.index');
        
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
    	$data = Course::findOrFail($id);
        $data->status = 0;

        $data->save();
        
        \Session::flash('success','Course '.$data->name.' Successfully Deleted ');
        return redirect()->route('course.index');	
    }
}

<?php

namespace App\Http\Controllers\Staff;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Schedule;
use App\Klas;
use App\Lecturer;
use Carbon\Carbon;
use Helper;

class ScheduleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = Schedule::orderBy('class_id','asc')
                ->orderBy('firstDate','desc')->with('classes')->with('lecturers')->get();
        
        return view('staff.schedule.schedule')->with('data',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $model = new Schedule();
        $class = Klas::orderBy('id','asc')->get();
        $lecture = Lecturer::with('courses')->get();
        return view('staff.schedule.form')->with('model',$model)
                ->with('class',$class)
                ->with('lecturer',$lecture);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(\App\Http\Requests\Staff\Schedule\StoreRequest $request)
    {
        //
            
            //1 CLASS MAX 7 TIMES
            $count = Schedule::where('class_id',$request->class_id)->groupBy('firstDate')->count();
            if($count > 7)
                return redirect()->back()->withInput($request->all())->with('status','Sorry This Class Already have full schedule ');
            
            $data= [
                'firstDate' => $request->firstDate,
                'lastDate' => $request->lastDate,
                'timeStart' => $request->timeStart,
                'duration' => $request->duration,
                'class_id' => $request->class_id,
                'lecture_id' => $request->lecture_id
            ];
            //dd($data);
            $do = Schedule::create($data);
        \Session::flash('success','Schedule successfully created');
        return redirect()->route('schedule.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Schedule::where('id',$id)->with('classes')->with('lecturers.courses')->first();
        return response()->json($data);
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
        $model = Schedule::findOrFail($id);
        $class = Klas::orderBy('id','asc')->get();
        $lecture = Lecturer::with('courses')->get();
      //  dd($model->lecture_id);
        return view('staff.schedule.form')->with('model',$model)
                ->with('class',$class)
                ->with('lecturer',$lecture);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(\App\Http\Requests\Staff\Schedule\StoreRequest $request, $id)
    {
        //
            
            //1 CLASS MAX 7 TIMES
            $count = Schedule::where('class_id',$request->class_id)->groupBy('firstDate')->count();
            if($count > 7)
                return redirect()->back()->withInput($request->all())->with('status','Sorry This Class Already have full schedule ');
            
            $data= [
                'firstDate' => $request->firstDate,
                'lastDate' => $request->lastDate,
                'timeStart' => $request->timeStart,
                'duration' => $request->duration,
                'class_id' => $request->class_id,
                'lecture_id' => $request->lecture_id
            ];
            $do = Schedule::findOrFail($id)->update($data);
        \Session::flash('success','Schedule successfully updated');
        return redirect()->route('schedule.index');
        
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
        $data = Schedule::findOrFail($id);
        $data->delete();
        \Session::flash('success','Schedule successfully deleted');
        return redirect()->route('schedule.index');
    }
}

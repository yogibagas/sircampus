@extends('layouts.app')
@section('content')
<div class="row">
    <div class="col-md-12">
        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif

        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
    </div>

    <form action="{{ $model->exists ? route('schedule.update',$model->id) : route('schedule.store')}}" method="post" class="">
        @csrf
        <div class="col-md-4">

            <div class="block">
                <div class="block-title">
                    <h2>{{strpos(Route::current()->uri,'create')?"New Schedule ":"Update Schedule"}}</h2>
                </div>
                {{ $model->exists ? method_field('PUT') : method_field('POST') }}
                <div class="form-group">
                    <label for="example-nf-password">Date of this Schedule</label>
                    <input type="text" id="firstDate" name="firstDate" class="form-control input-datepicker" data-date-format="yyyy/mm/dd" value="{{old('firstDate',$model->firstDate)}}" placeholder="Click me to choose the date" readonly="" required="">
                    <span class="help-block">Choose when is the date of this schedule</span>
                </div>
                <div class="form-group">
                    <label>Time Schedule</label>
                    <div class="input-group bootstrap-timepicker">
                        <input type="time" id="example-timepicker" value="{{old('timeStart',$model->timeStart)}}" name="timeStart" class="form-control">
                        <span class="input-group-btn disabled">
                            <a href="javascript:void(0)" class="btn btn-primary"><i class="fa fa-clock-o"></i></a>
                        </span>
                    </div>
                </div>
                <div class="form-group">
                    <label>Duration</label>
                    <select name="duration" class="select-chosen form-control" data-placeholder="Choose duration">
                        <option  {{ $model->exists ? false: "selected"}}></option>
                        <option value="50" {{ old('duration',$model->duration) == 50 ? "selected" : ""}}>50 Min</option>
                        <option value="100" {{$model->duration == 100 ? "selected" : ""}}>100 Min</option>
                    </select>
                    <span class="help-block">how long is this schedule duration</span>
                </div>


                <div class="form-group form-actions">
                    <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Save</button>
                    <button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="block">
                <div class="block-title">
                    <h2>Choose Class</h2>
                </div>
                <div class="form-group">
                    <select name="class_id" class="select-chosen form-control" data-placeholder="Choose Schedule Class">
                        <option  {{ $model->exists ? false: "selected"}}></option>
                        @foreach($class as $c)
                        <option value="{{$c->id}}" {{old('class_id',$model->class_id) == $c->id ? "selected":""}}>{{$c->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="block">
                <div class="block-title">
                    <h2>Choose Lecturer</h2>
                </div>
                <div class="form-group">
                    <select name="lecture_id" class="select-chosen form-control" data-placeholder="Choose lecturer class">
                        <option></option>   
                        @foreach($lecturer as $l)
                        <option value="{{$l->id}}" {{old('lecture_id',$model->lecture_id) == $l->id ? "selected":""}}>{{$l->name}} - {{$l->courses->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>

    </form>
</div>
@endsection
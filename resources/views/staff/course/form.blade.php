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
        </div>
    <div class="col-md-4">
       
        <div class="block">
            <div class="block-title">
                <h2>{{strpos(Route::current()->uri,'create')?"New Course Form":"Update Course"}}</h2>
            </div>
            @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
            @endif
            <form action="{{ $model->exists ? route('course.update',$model->id) : route('course.store')}}" method="post" class="">
                @csrf
                {{ $model->exists ? method_field('PUT') : method_field('POST') }}
                <div class="form-group">
                    <label for="example-nf-password">Name</label>
                    <input type="name" id="name" name="name" class="form-control" placeholder="Enter name.." value="{{old('name',$model->name)}}">
                    <span class="help-block">Please enter your name</span>
                </div>

                <div class="form-group form-actions">
                    <button type="submit" class="btn btn-sm btn-primary"> Input</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@extends('layouts.app')
@section('content')
<div class="row">
    <div class="block" style="padding-bottom:50px;">
        <div class="block-title">
            <h2>Course Data</h2>
        </div>
                <a href="{{route('course.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Add New course</a>
                @if(Session::has('success'))
                <div class="alert alert-danger">
                    {{Session::get('success')}}
                </div>
                @endif
        <div class="table-responsive">
            
            <table id="" class="table table-vcenter table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Registered On</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $l)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$l->name}}</td>
                        <td>{{$l->phone}}</td>
                        <td>{{Helper::formatDate('Y',$l->created_at)}}</td>
                        <td>{{Helper::getFake($l->status,'Active','Deactive')}}</td>
                        <td class="text-center">
                             <a href="{{ route('course.edit',$l->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('course.delete',$l->id)}}" data-toggle="tooltip" title="" class="btn btn-{{$l->status == 1?"danger":"info"}}" 
                                   data-original-title="{{ $l->status == 1 ? "Disable This Course" : "Enable This Course"}}">
                                    <i class="{{ $l->status == 1 ? 'fa fa-times' : 'fa fa-check' }}"></i>
                                </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
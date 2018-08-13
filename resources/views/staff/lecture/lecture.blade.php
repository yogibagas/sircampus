@extends('layouts.app')
@section('content')
<div class="row">
    <div class="block" style="padding-bottom:50px;">
        <div class="block-title">
            <h2>Lecturers Data</h2>
        </div>
                <a href="{{route('lecture.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Add New Lecture</a>
                @if(Session::has('success'))
                <div class="alert alert-danger">
                    {{Session::get('success')}}
                </div>
                @endif
        <div class="table-responsive">
            
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Registered On</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lecture as $l)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$l->name}}</td>
                        <td>{{Helper::formatDate('d F Y',$l->dob)}}</td>
                        <td>{{Helper::getFake($l->gender,'Male','Female')}}</td>
                        <td>{{$l->address}}</td>
                        <td>{{$l->phone}}</td>
                        <td>{{Helper::formatDate('Y',$l->created_at)}}</td>
                        <td>{{Helper::getFake($l->status,'Active','Deactive')}}</td>
                        <td class="text-center">
                             <a href="{{ route('lecture.edit',$l->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('lecture.destroy',$l->id)}}" data-toggle="tooltip" title="" class="btn btn-{{$l->status == 1?"danger":"info"}}" 
                                   data-original-title="{{ $l->status == 1 ? "Deactive This Mahasiswa" : "Activated This Mahasiswa"}}">
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
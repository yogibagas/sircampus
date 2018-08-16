@extends('layouts.app')
@section('content')
<div class="row">
    <div class="block" style="padding-bottom:50px;">
        <div class="block-title">
            <h2>Class Data</h2>
        </div>
                <a href="{{route('class.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Add New Class</a>
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
                        <th>Created At</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                 @foreach($data as $d)
                 <tr>
                     <td>{{$loop->iteration}}</td>
                     <td>{{$d->name}}</td>
                     <td>{{Helper::formatDate('d F Y',$d->created_at)}}</td>
                     <td> 
                            <div class="btn-group btn-group-xs">
                                <a href="{{ route('course.edit',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('course.destroy',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-{{$d->status == 1?"danger":"info"}}" 
                                   data-original-title="{{ $d->status == 1 ? "Deactive This Mahasiswa" : "Activated This Mahasiswa"}}">
                                    <i class="{{ $d->status == 1 ? 'fa fa-times' : 'fa fa-check' }}"></i>
                                </a>
                            </div>
                     </td>
                 </tr>
                 @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
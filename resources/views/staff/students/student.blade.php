@extends('layouts.app')
@section('content')
<div class="row">
    <div class="block">
        <div class="block-title">
            <h2>Students Data</h2>
        </div>
        
                <a href="{{route('student.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Create new student</a>
            
                @if(Session::has('success'))
                <div class="alert alert-danger">
                    {{Session::get('success')}}
                </div>
                @endif
        <div class="table-responsive">
            <table id="example-datatable" class="table table-vcenter table-bordered table-striped">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Name</th>
                        <th>Date Of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Generation</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($data as $d)
                    <tr>
                        <td>{{$d->nim}}</td>
                        <td>{{ucwords($d->name)}}</td>
                        <td>{{Helper::formatDate('d F Y',$d->dob)}}</td>
                        <td>{{$d->genderFake}}</td>
                        <td>{{$d->address}}</td>
                        <td>{{$d->phone}}</td>
                        <td>{{Helper::formatDate('Y',$d->created_at)}}</td>
                        <td>{{ $d->fakeStatus }}</td>
                        <td class="text-center">
                            <div class="btn-group btn-group-xs">
                                <a href="{{ route('student.edit',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('student.delete',$d->id)}}" data-toggle="tooltip" title="" class="btn btn-{{$d->status == 1?"danger":"info"}}" 
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
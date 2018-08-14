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
                        <th>Courses</th>
                        <th>Date Of Birth</th>
                        <th>Gender</th>
                        <th>Address</th>
                        <th>Phone</th>
                        <th>Registered</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lecture as $l)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{ucwords($l->name)}}</td>
                        <td>{{ucwords($l->courses->name)}}</td>
                        <td>{{Helper::formatDate('d F Y',$l->dob)}}</td>
                        <td>{{Helper::getFake($l->gender,'Male','Female')}}</td>
                        <td>{{$l->address}}</td>
                        <td>{{$l->phone}}</td>
                        <td>{{Helper::formatDate('Y',$l->created_at)}}</td>
                        <td class="text-center">
                             <a href="{{ route('lecture.edit',$l->id)}}" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                <a href="{{ route('lecture.delete',$l->id)}}" data-toggle="tooltip" title="" class="btn btn-{{$l->status == 1?"danger":"info"}}" 
                                   data-original-title="{{ $l->status == 1 ? "Deactive This Mahasiswa" : "Activated This Mahasiswa"}}">
                                    <i class="{{ $l->status == 1 ? 'fa fa-times' : 'fa fa-check' }}"></i>
                                </a>
                             <a href="#" data-toggle="modal" data-target="#myModal"
                                class="btn btn-success" id="{{$l->id}}}" data-id="{{$l->id}}">
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
<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Modal title</h4>
      </div>
      <div class="modal-body">
          <div class="fetched-data">
          </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
@endsection
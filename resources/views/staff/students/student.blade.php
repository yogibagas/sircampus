@extends('layouts.app')
@section('content')
<div class="row">
	<div class="block">
		<div class="block-title">
			<h2>Students Data</h2>
		</div>
		<div class="table-responsive">

			<a href="{{route('student.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Create new student</a>
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
                                        <th>Action</th>
				</tr>
			</thead>
                        <tbody>
                            @foreach($data as $d)
                            <tr>
                                <td>{{$d->nim}}</td>
                                <td>{{$d->name}}</td>
                                <td>{{date('d F Y',strtotime($d->dob))}}</td>
                                <td>{{$d->genderFake}}</td>
                                <td>{{$d->address}}</td>
                                <td>{{$d->phone}}</td>
                                <td>{{date('Y',strtotime($d->created_at))}}</td>
                                <td class="text-center">
                                            <div class="btn-group btn-group-xs">
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-default" data-original-title="Edit"><i class="fa fa-pencil"></i></a>
                                                <a href="javascript:void(0)" data-toggle="tooltip" title="" class="btn btn-danger" data-original-title="Delete"><i class="fa fa-times"></i></a>
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
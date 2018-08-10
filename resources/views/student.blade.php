@extends('layouts.app')
@section('content')
<div class="row">
	<div class="block">
		<div class="block-title">
			<h2>Students Data</h2>
		</div>
		<div class="table-responsive">

			<a href="{{route('student.create')}}" class=" btn btn-default" style="margin-bottom:20px;">Create new student</a>
			<table class="table table-vcenter table-bordered table-striped">
				<thead>
				<tr>
					<th>NIM</th>
					<th>Name</th>
					<th>Date Of Birth</th>
					<th>Gender</th>
					<th>Address</th>
					<th>Phone</th>
					<th>Registration Date</th>
				</tr>
			</thead>
			</table>
		</div>
	</div>
</div>
@endsection
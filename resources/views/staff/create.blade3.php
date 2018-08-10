@extends('layouts.app')
@section('content')
<div class="row">
<div class="col-md-4">
	<div class="block">
		<div class="block-title">
			<h2>{{strpos(Route::current()->uri,'create')?"New Student Form":"Update Student"}}</h2>
		</div>
		@if (session('status'))
                                    <div class="alert alert-success">
                                        {{ session('status') }}
                                    </div>
                                @endif
		<form action="{{route('student.store')}}" method="post" class="">
			@csrf
<div class="form-group">
<label for="example-nf-email">NIM</label>
<input type="text" id="identity" value="{{date('ym').'01'.sprintf('%04u', $nim)}}" readonly="" name="identity" class="form-control" placeholder="Enter nim..">
</div>

<div class="form-group">
<label for="example-nf-password">Name</label>
<input type="name" id="name" name="name" class="form-control" placeholder="Enter name..">
<span class="help-block">Please enter your name</span>
</div>
<div class="form-group">
<label for="example-nf-password">Gender</label>
<select id="gender" name="gender" class="select-chosen form-control" data-placeholder="Choose student gender">
                                                <option></option>
                                                <option value="1">Male</option>
                                                <option value="0">Female</option>
                                            </select>
<span class="help-block">Choose your gender</span>
</div>
<div class="form-group">
<label for="example-nf-password">Password</label>
<input type="password" id="password" name="password" class="form-control" value="123456" placeholder="Enter Password..">
<span class="help-block">Please enter your password (default 123456)</span>
</div>
<div class="form-group">
<label for="example-nf-password">Confirm Password</label>
<input id="password-confirm" type="password" class="form-control input-lg" value="123456" name="password_confirmation" placeholder="Confirm password" required>
<span class="help-block">Confirm student password</span>
</div>

<div class="form-group">
<label for="example-nf-password">Date of Birth</label>
 <input type="text" id="dob" name="dob" class="form-control input-datepicker" data-date-format="yyyy/mm/dd" placeholder="Date of Birth" readonly="" required="">
<span class="help-block">Please choose your Date of Birth</span>
</div>

<div class="form-group">
<label for="example-nf-password">Phone</label>
 <input type="text" id="phone" name="phone" class="form-control" placeholder="phone" required="">
<span class="help-block">Please choose your Date of Birth</span>
</div>

<div class="form-group">
<label for="example-nf-password">Address</label>
 <input type="text" id="address" name="address" class="form-control" placeholder="address" required="">
<span class="help-block">Please choose your Date of Birth</span>
</div>

<div class="form-group form-actions">
<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Input</button>
<button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
</div>
</form>
	</div>
</div>
</div>
@endsection
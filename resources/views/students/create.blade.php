@extends('layouts.app')
@section('content')
	<div class="block">
		<div class="block-title">
			<h2>{{strpos(Route::current()->uri,'create')?"New Student Form":"Update Student"}}</h2>
		</div>
		<form action="page_forms_general.php" method="post" class="" onsubmit="return false;">
<div class="form-group">
<label for="example-nf-email">NIM</label>
<input type="email" id="example-nf-email" name="example-nf-email" class="form-control" placeholder="Enter Email..">
<span class="help-block">Please enter your email</span>
</div>
<div class="form-group">
<label for="example-nf-password">Password</label>
<input type="password" id="example-nf-password" name="example-nf-password" class="form-control" placeholder="Enter Password..">
<span class="help-block">Please enter your password</span>
</div>
<div class="form-group form-actions">
<button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-user"></i> Login</button>
<button type="reset" class="btn btn-sm btn-warning"><i class="fa fa-repeat"></i> Reset</button>
</div>
</form>
	</div>
@endsection
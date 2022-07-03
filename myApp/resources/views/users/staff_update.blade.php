@extends('layouts.app')

@section('content')

<div class="container">
<h1>User Setting</h1>

<form   action="{{ url("/users/staff_update/" . $users -> id )}}" method ="GET" enctype="multipart/form-data">
	<div class="row mb-3">
	<div class="col-md-6 row">
	<select id="staff_update" type="text" class="form-control" name="staff_update">
		<option value="customer">Customer</option>
		<option value="staff">Staff</option>
	</select>
	</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary"<button type="submit">Change</button>
		</div>
	</div>
</form>
</div>


@endsection
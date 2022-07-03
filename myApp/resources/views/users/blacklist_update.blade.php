@extends('layouts.app')

@section('content')

<div class="container">
<h1>User Blacklist Setting</h1>

<form   action="{{ url("/users/blacklist_update/" . $users -> id )}}" method ="GET" enctype="multipart/form-data">
	<div class="row mb-3">
	<div class="col-md-6 row">
	<select id="blacklisted" type="text" class="form-control" name="blacklisted">
		<option value="Yes">Yes</option>
		<option value="No">No</option>
	</select>
	</div>
		<div class="col-md-6">
			<button type="submit" class="btn btn-primary"<button type="submit">Change</button>
		</div>
	</div>
</form>
</div>


@endsection
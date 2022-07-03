@extends('layouts.app')

@section('content')
<div class="container">
<h1>Manager Dashboard</h1>

<div class="table-responsive">

<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">total number of users</th>
			<th scope="col">total number of staffs</th>
			<th scope="col">users in blacklist</th>
			<th scope="col">number of computers</th>
			<th scope="col">number of computers have not returned </th>
		</tr>
	</thead>
	<tbody>
	<td>{{ $dashboard['user_count'] }} </td>
	<td>{{ $dashboard['staff_count'] }} </td>
	<td>{{ $dashboard['blacklist_count'] }} </td>
	<td>{{ $dashboard['computer_count'] }} </td>
	<td>{{ $dashboard['notReturn_count'] }} </td>

</table>

</div>
</div>
@endsection
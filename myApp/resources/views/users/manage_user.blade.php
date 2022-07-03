@extends('layouts.app')

@section('content')
<div class="container">

@if (isset(Auth::user()->id) && (Auth:: user()->description=='staff'))
<h1>Black Customer List</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
			<td>ID</td>
			<td>name</td>
			<td>email</td>
			<td>description</td>
			<td>funds</td>
			<td>Phone Number</td>
			<td>Damage Time</td>
			<td>blacklisted</td>
			</tr>
		</thead>
@foreach ($users as $user)
	<tbody>
	<tr>
		@if ($user->blacklisted == "Yes" && $user->damage_time >= "3")
        <td>{{ $user->id }} </td>
        {{--display the name --}}
        <td>{{ $user->name }} </td>
        <td>{{ $user->email }} </td>
        {{--display the email --}}
        <td>{{ $user->description }} </td>
        {{--display the description --}}
        <td>{{ $user->funds }} </td>
        {{--display the funds --}}
        <td>{{ $user->phone }} </td>
        <td>{{ $user->damage_time }} </td>
        <td>{{ $user->blacklisted }} </td>
        @endif
    </tr>
	</tbody>
@endforeach
</table>
</div>
@endif        


        
@if (isset(Auth::user()->id) && (Auth:: user()->description=='staff'))
<h1>Customer List</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
			<td>ID</td>
			<td>name</td>
			<td>email</td>
			<td>description</td>
			<td>funds</td>
			<td>Phone Number</td>
			<td>Damage Time</td>
			<td>blacklisted</td>
			</tr>
		</thead>
@foreach ($users as $user)
	<tbody>
	<tr>
        <td>{{ $user->id }} </td>
        {{--display the name --}}
        <td>{{ $user->name }} </td>
        <td>{{ $user->email }} </td>
        {{--display the email --}}
        <td>{{ $user->description }} </td>
        {{--display the description --}}
        <td>{{ $user->funds }} </td>
        {{--display the funds --}}
        <td>{{ $user->phone }} </td>
        <td>{{ $user->damage_time }} </td>
        <td>{{ $user->blacklisted }} </td>
    </tr>
	</tbody>
@endforeach
</table>
</div>
@endif        

        
        
@if (isset(Auth::user()->id) && (Auth:: user()->description=='manager'))
<h1>Black Customer List</h1>
<div class="table-responsive">
	<table class="table table-striped">
		<thead>
			<tr>
			<td>ID</td>
			<td>name</td>
			<td>email</td>
			<td>description</td>
			<td>funds</td>
			<td>Phone Number</td>
			<td>Damage Time</td>
			<td>blacklisted</td>
			<td>Action</td>
			</tr>
		</thead>
@foreach ($users as $user)
	<tbody>
	<tr>
        <td>{{ $user->id }} </td>
        {{--display the name --}}
        <td>{{ $user->name }} </td>
        <td>{{ $user->email }} </td>
        {{--display the email --}}
        <td>{{ $user->description }} </td>
        {{--display the description --}}
        <td>{{ $user->funds }} </td>
        {{--display the funds --}}
        <td>{{ $user->phone }} </td>
        <td>{{ $user->damage_time }} </td>
        <td>{{ $user->blacklisted }} </td>
        </div>
    </div>    
		<td>
			<a href="{{route('show_blacklist', $user -> id)}}" class="btn btn-warning">Manage Blacklist</a>
			<a href="{{route('show_staff', $user -> id)}}" class="btn btn-danger">Manage Staff</a>
		</td>
    </tr>
	</tbody>
@endforeach
</table>
</div>
@endif        
        
        
        
</div>        
@endsection
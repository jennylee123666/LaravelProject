@extends('layouts.app')

@section('content')
<div class="container">
<h1>User Details</h1>

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
        {{--display the r name --}}
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

@if (isset(Auth::user()->id) && (Auth:: user()->description=='staff'))
<td>
<a href= "users/recharge/{id}" class="btn btn-warning">Re-Charge Retal Fee</a>
<a href="users/recharge/{{ $user->id}}" class="btn btn-danger">Delete</a>
</tr>
@endif

</tbody>


@endforeach
</table>
</div>
</div>
@endsection

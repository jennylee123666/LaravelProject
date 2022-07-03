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
@if (isset(Auth::user()->id) && (Auth::user()->id == $user->id))
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
    @endif
@if (isset(Auth::user()->id) && (Auth::user()->id == $user->id)))
<td>
<a href="{{route('recharge', $user -> id)}}" class="btn btn-warning">Re-Charge Retal Fee</a>
<a href="{{route('show_update', $user -> id)}}" class="btn btn-danger">edit basic info</a>
</tr>
@endif

</tbody>

@endforeach
</table>
</div>
</div>


<div class="container">
<h1>User Rental History</h1>

<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<td>order_id</td>
<td>computer_id</td>
<td>rental_user_id</td>
<td>total_price</td>
<td>deposit</td>
<td>damage_status</td>
<td>deposit_returned</td>
<td>insurance</td>
</tr>
</thead>
<!-- 'order_id','created_at','updated_at','computer_id',
'rental_retal_id','base_price','duration','discount',
'insurance','total_price','deposit','damage_status','damage_amount','deposit_returned' -->

@foreach ($retals as $retal)
@if (isset(Auth::user()->id) && (Auth::user()->id == $retal->rental_user_id))
<tbody>
<tr>
        <td>{{ $retal->order_id }} </td>
        <td>{{ $retal->computer_id }} </td>
        <td>{{ $retal->rental_user_id }} </td>
        <td>{{ $retal->total_price }} </td>
        <td>{{ $retal->deposit }} </td>
        <td>{{ $retal->damage_status }} </td>
        <td>{{ $retal->deposit_returned }} </td>
        <td>{{ $retal->insurance }} </td>
        
        </div>
    </div>

<td>
</tr>


</tbody>
@endif
@endforeach
</table>
</div>
</div>
@endsection

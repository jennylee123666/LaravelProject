@extends('layouts.app')

@section('content')
<div class="container">
<h1>Manage Rental Page</h1>

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
<td>Action</td>
</tr>
</thead>
<!-- 'order_id','created_at','updated_at','computer_id',
'rental_retal_id','base_price','duration','discount',
'insurance','total_price','deposit','damage_status','damage_amount','deposit_returned' -->

@foreach ($retals as $retal)
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
<a href="{{route('retal_show_update', $retal ->order_id)}}" class="btn btn-warning">Edit</a>
<a href="{{route('bond', $retal ->order_id)}}" class="btn btn-danger">Manage Bonds</a>
</tr>


</tbody>

@endforeach
</table>
</div>
</div>
@endsection

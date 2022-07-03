@extends('layouts.app')

@section('content')

<div class="container">
</br>
<h1>List of Computers</h1>
</br>
<table class="table table-striped">
	<thead>
		<tr>
			<th scope="col">ID</th>
			<th scope="col">Brand</th>
			<th scope="col">Operating_system</th>
			<th scope="col">Display_size</th>
			<th scope="col">RAM</th>
			<th scope="col">num_USB_port</th>
			<th scope="col">HDMI_port</th>
			<th scope="col">Rental_price</th>
			<th scope="col">Availability</th>
		</tr>
	</thead>
	<tbody>
	@foreach( $products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->brand}}</td>
			<td>{{$product->Operating_system}}</td>
			<td>{{$product->Display_size}}</td>
			<td>{{$product->RAM}}</td>
			<td>{{$product->num_USB_port}}</td>
			<td>{{$product->HDMI_port}}</td>
			<td>{{$product->Rental_price}}</td>
			<td>{{$product->availability}}</td>			
		</tr>
	@endforeach
	</tbody>
</table>
</div>
@endsection
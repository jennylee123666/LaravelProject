@extends('layouts.app')

@section('content')
<div class="container-fluid">
<h1>List of Computers</h1>

<div class="table-responsive">
<table class="table table-striped">
<thead>
<tr>
<td>image</td>
<td>ID</td>
<td>brand</td>
<td>Operating_system</td>
<td>Display_size</td>
<td>RAM</td>
<td>num_USB_port</td>
<td>HDMI_port</td>
<td>Rental_price</td>
<td>Availability</td>
<td>Action</td>
</tr>
</thead>

<!-- foreach (array_combine($computers, $users) as $computer => $user) -->
@foreach ($computers as $computer) 
<tbody>
<!-- 'brand','Operating_system','Display_size','RAM','num_USB_port','HDMI_port','Rental_Display_size' -->
{{--display the id --}}
<td><img src="{{asset ('images/' . $computer->image_path)}}" class="w-40 mb-8 shadow-xl" width="300"> </td>
<td>{{ $computer->id }} </td>
{{--display the computer name --}}
<td>{{ $computer->brand }} </td>
{{--display the brand --}}
<td>{{ $computer->Operating_system }} </td>
{{--display the Operating_system --}}
<td>{{ $computer->Display_size }} </td>
{{--display the Display_size --}}
<td>{{ $computer->RAM }} </td>
{{--display the RAM --}}
<td>{{ $computer->num_USB_port }} </td>
<td>{{ $computer->HDMI_port }} </td>
<td>{{ $computer->Rental_price  }} </td>
<td>{{ $computer->availability  }} </td>

<td>
<a href="rent/rentalpage/{{ $computer->id}}"  class="btn btn-warning">Rent</a>

</tbody>

@endforeach
</table>
</div>
</div>
@endsection
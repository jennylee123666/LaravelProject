@extends('layouts.app')

@section('content')
<div class="container">
<h1>List of Computers</h1>


@if (Auth::user())
<div class="pt-10">
{{--Button to link to create.blade.php --}}
@if (isset(Auth::user()->id) && (Auth:: user()->description=='staff'||'manager'))
<a href="computers/create" class="btn btn-secondary btn-sn">Add a new Computer</a>
@endif
</div>
@endif

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
@if (isset(Auth::user()->id) && (Auth:: user()->description=='staff'||'manager'))
<td>
<a href= "computers/edit/{{ $computer->id }}" class="btn btn-warning">Edit</a>
<a href="computers/delete/{{ $computer->id}}" class="btn btn-danger">Delete</a>
</tr>

@endif
</tbody>

@endforeach
</table>
</div>
</div>
@endsection

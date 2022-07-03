@extends('layouts.app')
<style>
select {
        width:100%;
        border: 1px solid #ccc;
      
        border-radius:05px;
        padding: 10px 15px 10px 15px;
}
</style>
@section('content')
<div class="container p-10">
<div class="d-grid gap-3">
<div class="p-2">
<h1 style="bold">Update Computer</h1>
</div>
<div class="p-2">
<form action="{{ url("/computers/update")}}" method ="POST" enctype="multipart/form-data">
@csrf
@method('POST')
<div class="mb-3">
<input type ="text" class="form-control" name="id" id="id" value="{{$computers->id}}" autocomplete="off" hidden>
<label for="image" class="form-label">computer image</label>
<input type ="file" class="form-control" name="image" id="image" autocomplete="off">
</div>
<div class="mb-3">
<label for="brand" class="form-label">computer brand</label>
<input type ="text" class="form-control" name="brand" id="brand"  value="{{$computers->brand}}"autocomplete="off">
<!-- 'brand','Operating_system','Display_size','RAM','num_USB_port','HDMI_port','Rental_price' -->
</div>
<div class="mb-3">
<label for="Operating_system" class="form-label">Operating_system of computer</label>
<select name=" Operating_system" id="Operating_system" value="{{$computers->Operating_system}}" autocomplete="off">
<option value="" selected="selected">Select the type of computer</option>
<option value="windows">windows</option>
<option value="mac">mac</option>
<option value="linix">linix</option> 
</select>  
</div>
<div class="mb-3">
<label for="Display_size" class="form-label">Display_size</label>
<input type ="text" class="form-control" name="Display_size" id="Display_size" value="{{$computers->Display_size}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="RAM" class="form-label">RAM</label>
<input type ="text" class="form-control" name="RAM" id="RAM" value="{{$computers->RAM}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="num_USB_port" class="form-label">num_USB_port</label>
<select name="num_USB_port" id="num_USB_port" value="{{$computers->num_USB_port}}" autocomplete="off">
<option value="" selected="selected">Select the num_USB_port of computer</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option> 
</select> 
</div>
<div class="mb-3">
<label for="HDMI_port" class="form-label">HDMI_port</label>
<input type ="text" class="form-control" name="HDMI_port" id="HDMI_port" value="{{$computers->HDMI_port}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="Rental_price" class="form-label">Rental_price</label>
<input type ="text" class="form-control" name="Rental_price" id="Rental_price" value="{{$computers->Rental_price}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="num_USB_port" class="form-label">num_USB_port</label>
<select name="availability" id="availability" value="{{$computers->availability}}" autocomplete="off">
<option value="" selected="selected">Select the availability of computer</option>
<option value="Available">Available</option>
<option value="In_use">In use</option>
<option value="Broken">Broken</option>
<option value="Checking_Status">Checking Status</option> 
</select> 
</div>
<!-- <div class="mb-3">
<label for="num_USB_port" class="form-label">num_USB_port</label>
<select name="availability" id="num_USB_port" value="{{$computers->availability}}" autocomplete="off">
<option value="" selected="selected">Select the availability for computer</option>
<option value="available">available</option>
<option value="in_use">in use</option>
<option value="broken">broken</option>
<option value="on_hol">on_hold</option> 
</select> 
</div> -->
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection


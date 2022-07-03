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
<h1 style="bold">Update User Information</h1>
</div>
<div class="p-2">
<form action="{{ url("/users/update/" . Auth::user() -> id )}}" method ="GET" enctype="multipart/form-data">
@csrf
@method('POST')
<div class="mb-3">
<label for="name" class="form-label">user name</label>
<input type ="text" class="form-control" name="name" id="name"  value="{{$users->name}}"autocomplete="off">
<!-- 'name','email','phone','RAM','num_USB_port','HDMI_port','Rental_price' -->
</div>
<div class="mb-3">
<label for="email" class="form-label">email of user</label>
<input type ="text" class="form-control" name="email" id="email"  value="{{$users->email}}"autocomplete="off">
</div>
<div class="mb-3">
<label for="phone" class="form-label">phone</label>
<input type ="text" class="form-control" name="phone" id="phone" value="{{$users->phone}}" autocomplete="off">
</div>

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection


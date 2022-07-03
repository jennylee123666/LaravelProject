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
<h1 style="bold">Update Damage Status</h1>
</div>
<div class="p-2">
<form action="{{ url('/retal/edit/'.$retals->order_id) }}" method ="GET" enctype="multipart/form-data">
@csrf
@method('POST')
<div class="mb-3">
<label for="order_id" class="form-label">order_id</label>
<input type ="text" class="form-control" name="order_id" id="order_id"  value="{{$retals->order_id}}"autocomplete="off">
</div>
<div class="mb-3">
<label for="created_at" class="form-label">created_at</label>
<input type ="text" class="form-control" name="created_at" id="created_at"  value="{{$retals->created_at}}"autocomplete="off">
</div>
<div class="mb-3">
<label for="computer_id" class="form-label">computer_id</label>
<input type ="text" class="form-control" name="computer_id" id="computer_id" value="{{$retals->computer_id}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="rental_user_id" class="form-label">rental_user_id</label>
<input type ="text" class="form-control" name="rental_user_id" id="rental_user_id" value="{{$retals->rental_user_id}}" autocomplete="off">
</div>
<div class="mb-3">
<label for="damage_status" class="form-label">damage_status</label>
<select name="damage_status" id="damage_status" value="{{$retals->damage_status}}" autocomplete="off">
<option value="" selected="selected">Select the damage status of computer</option>
<option value="not_damaged">not damaged</option>
<option value="minor_damage">minor damage</option>
<option value="major_damage">major damage</option>
</select> 
</div>
<div class="mb-3">
<label for="insurance" class="form-label">insurance</label>
<input type ="text" class="form-control" name="insurance" id="insurance" value="{{$retals->insurance}}" autocomplete="off">
</div>
</div>
<div class="mb-3">
<label for="deposit_returned" class="form-label">deposit_returned</label>
<!-- <input type ="text" class="form-control" name="deposit_returned" id="deposit_returned" value="{{$retals->deposit_returned}}" autocomplete="off"> -->
<select name="deposit_returned" id="deposit_returned" value="{{$retals->deposit_returned}}" autocomplete="off">
<option value="" selected="selected">Select the deposit returned or not of computer</option>
<option value="returned">returned</option>
<option value="not_returned">not returned</option>
</select> 
</div>
<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>
</div>
</div>

@endsection


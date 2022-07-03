@extends('layouts.app')
@section('content')

        
        <div class="container p-10">
        <div class="d-grid gap-3">
        <div class="p-2">
            <h1>Recharge Page</h1>
        </div>   
        <div class="mb-3">
        <form action="{{ url("/users/recharing/{id}")}}" method ="GET" enctype="multipart/form-data">
        @csrf 
        <label for="fund" class="form-label">Input the amount of money you would like to add</label>
        <input type ="text" class="form-control" name="fund" id="fund" autocomplete="off">
        <button type="submit" class="btn btn-primary">Add</button>
        </div>
        </div>
        </div>
        </form>
@endsection      
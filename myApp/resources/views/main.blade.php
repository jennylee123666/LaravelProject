@extends('layouts.app')
@section('content')
<h1 >UTAS Computer Rental Service </h1>
</br>
</br>

<div class="container" >
       	<div class="row" id="mainContainer">
        	<div class="col-4">
        		<img class = "img-responsive" src= "{{url('../images/1653285226-asd.jpg')}}" alt="error" style="width:100%;">
        	</div>
        	<div class="col-4">
        		<img class = "img-responsive" src= "{{url('../images/homeimage.jpg')}}" alt="error" style="width:100%;">
        	</div>
        	<div class="col-4">
        		<img class = "img-responsive" src= "{{url('../images/1653285399-a.jpg')}}" alt="error" style="width:100%;">
        	</div>
        </div>
</div>
</br>
</br>

<div class="container">
	<form type="get" action="{{ url("/search")}}" style="text-align:center;">				
		<input class="form-controll mr-sm-2" style="height:40px; width:400px" type="search" name= "query" placeholder="Enter the Brand">
		<button type="submit" style="height:40px; width:80px">Search</button>				
	</form>
</div>


@endsection


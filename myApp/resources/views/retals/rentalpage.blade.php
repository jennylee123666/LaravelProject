@extends('layouts.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
<meta charset ="utf-8"/>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.min.js" integrity="sha256-xNzN2a4ltkB44Mc/Jz3pT4iU1cmeR0FkXs4pru/JxaQ=" crossorigin="anonymous"></script>

<style>

.center {
  margin: 0;
  position: absolute;
  top: 60%;
  left: 50%;
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
</style>
</head>
<body>                       
<br><br><br>
<div class="container">
<h1>UTAS Rental Page</h1>
<p><br></p>
                                    
<form name="rent"method ="get" action="{{ url('rent/rentalpage/'.$computer->id)}}">
<table name="rent" class="table table-bordered table-stripped">
<thead>
<tr>
<th></th>
                               
<th>Rental Price per hour</th>
<th>Rental hour</th>
<th>Total Payment ($)</th>
</tr>
</thead>

<tbody>
<tr name="line_items"> 
<td>Base Price</td>
<td> <Label value="10" name="price" id="price" class="form-control "/>{{ $computer->Rental_price}}</td>
                                    
<td>
 <select  name="type" id="duration" name="duration" class="form-control " autocomplete="off" onclick="calculateRentalPrice(); grandTotal();">
<option value="" selected="selected">Select the hour for rent</option>
<option value="1">1</option>
<option value="1.5">1.5</option>
<option value="2">2</option> 
<option value="2.5">2.5</option> 
<option value="3">3</option> 
<option value="3.5">3.5</option> 
<option value="4">4</option> 
<option value="4.5">4.5</option> 
<option value="5">5</option> 
</select>  
</td>
<td><input type="text" value="0" name="total" id="total"  class="form-control"/></td>
</tr>
<tr>
<td>SubTotal</td>
<td>
<select name="type" name="insurance" id="insurance" class="form-control" onclick="calculateInsurancePrice(); grandTotal();" autocomplete="off">
<option value="0" selected ="selected">Insurance</option>
<option value="0">$0</option>
<option value="10">$10</option></td>

<td><Label  value="50" name="initial" id="initial" class="form-control "/>$50</td>
<td><input type="text" value="0" id="InSubTotal" name="sub_total" class="form-control"/></td>
</tr>
<tr>
<td></td>
<td>Discount</td>

<td>
<select name="type" id="discount" class="from-control" onclick="calculateDiscount(); grandTotal();">
<option value="1">Others</option>
<option value="0.9">Student</option>
</select>
</td>
<td><input type="text" value="No Discount" class="form-control" id="disTotal" name="discount_total" ></td>

</tr>
<tr>

<td colspan ="2">Total</td>
<td></td>
<td><input type="text" class="form-control" name="grand_total" id="gTotal" >
</tbody>

</table>
<div class="center">
<button type="submit" class="btn btn-danger">Pay</button></div>
</form>
<script>



function calculateRentalPrice(){
    var p = {{ $computer->Rental_price}};
    var h = document.getElementById('duration').value;
    document.getElementById('total').value = p * h;

}


function calculateInsurancePrice(){
    var c = 50;
    var i = document.getElementById('insurance').value;
    i = parseInt(i);
    document.getElementById('InSubTotal').value = c + i;

}

function calculateDiscount(){
    
    if( document.getElementById('discount').value == "1"){
        document.getElementById('disTotal').value = "No Discount";
    }
    else
        document.getElementById('disTotal').value = "10% Discount";

}

function grandTotal(){
    var a = document.getElementById('total').value;
    a = parseInt(a);
    var b = document.getElementById('InSubTotal').value;
    b = parseInt(b);
    if( document.getElementById('discount').value == "1"){
        document.getElementById('gTotal').value = a + b;
    }
    else
        document.getElementById('gTotal').value = (a+b)*0.9 ;

}


$('button[name=remove]').click(function(e) {
e.preventDefault();
var form = $(this).parents('form')
$(this).parents('tr').remove();
autoCalcSetup();
});


</script>
<script src="js/jquery.min.js"></script>
<script src="js/jAutoCalc.js"></script>
<script src="js/script.js"></script>


</body>
</html>

@endsection
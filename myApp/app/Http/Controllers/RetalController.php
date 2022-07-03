<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Retal;
use App\Models\User;
use App\Models\Computer;
use Auth;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\UserController;

class RetalController extends Controller
{
    public function index()
    {
      $retals = Retal::all();
      $computers = Computer::all();
      $users = User::all();
    return view('about', [   
    'computers' =>$computers,
      'users'=>$users,
      'retals'=>$retals]);
    }
    public function show_update(Request $request, $order_id) {
        $retal = Retal::find($order_id);
        return view('retals.edit' ,['retals'=>$retal]);
      }
    public function edit(Request $request, $order_id)
    {
      $retal = Retal::find($order_id);
      $retal->order_id = $request->input('order_id');
      $retal->computer_id = $request->input('computer_id');
      $retal->damage_status = $request->input('damage_status');
      $retal->deposit_returned = $request->input('deposit_returned');
      $retal->damage_amount = $request->input('damage_amount ');
      $retal-> insurance = $request->input('insurance');
     
        $retal->save();
        return redirect() -> route('retals');
    }

    public function bond(Request $request, $order_id) {
     
      $retal = Retal::find($order_id);
      $order_id = $request -> input('order_id');
      $user = User::find($retal -> rental_user_id);
      if ($retal -> damage_status == 'minor_damage') {
        if ($retal -> insurance == 0) {
          $user -> funds = $user -> funds -100;
        }
        $user -> damage_time = $user -> damage_time + 1;
      } else if ($retal -> damage_status == 'major_damage') {
        if ($retal -> insurance == 0) {
          $user -> funds -= 500;
        }
        $user -> damage_time++;
      }
      if ($user -> damage_time >= 3) {
        $user -> blacklisted = 'Yes';
      }
      $user -> update();
      return redirect() -> route('retals');
    }
    



       public function list()
       {
        $retals = Retal::all();
      $computers = Computer::all();
      $users = User::all();
    return view('retals.list', [   
    'computers' =>$computers,
      'users'=>$users,
      'retals'=>$retals]);
       }

       public function rentalpage($id)
       {
         $computer = Computer::where('id' ,$id)->first();
        return view('retals.rentalpage', [ 'computer'=>$computer]);
       }

public function search()
    {$retals = Retal::all();
      $computers = Computer::all();
      $users = User::all();
      $search_text = $_GET['query'];
      $computers = Computer::where ('brand', 'LIKE', '%'.$search_text.'%')->get();
        return view('retals.search' , compact('computers'));
    }
  public function calculation(){
      $retals = Retal::all();
      $computers = Computer::all();
      $users = User::all();

      return view('retals.list', [   
        'computers' =>$computers,
          'users'=>$users,
          'retals'=>$retals]);
  }
public function pay(Request $request){
    $price = $request-> input('price');
    $duration = $request-> input('duration');
    $base_price = $price * $duration;
    if(Auth::user()->description == 'student'){
    $base_price = $base_price * 0.9;
    }
    else $base_price = $base_price;

      $deposit = 50;
      $insurance = $request->input('insurance');
      $total_price = $base_price + $deposit + $insurance ;

     $retal = Retal::find($order_id);
      $computer -> Rental_price = $request->input('price');
      $retal->duration= $request->input('duration');
      $retal->base_price = $price * $duration;
      $retal->total_price = $base_price + $deposit + $insurance ;
      $retal->insurance  = $request->input('insurance');
        $retal->save();
        return redirect() -> route('retals.list');

    
  }




}

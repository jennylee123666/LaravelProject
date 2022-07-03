<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Http\Controllers\ProductsController;
use App\Models\Retal;
use App\Models\Computer;
use App\Http\Controllers\RetalController;


class UserController extends Controller
{
    public function index(){
        $users = User::all();
      $retals = Retal::all();
      $computers = Computer::all();
    
        return view('users.index', [   /**!!!!!!!!!!!!!!!!!!!!!!!!!!!not sure if this shou change file name oir fuc name?            products.index--}} */
        'computers' =>$computers,
         'users'=>$users,
      'retals'=>$retals]);
    }

    public function edit($id)
    {
      $user = User::where('id',$id)->first();
    return view('users.recharge' ,['users'=>$user]);
    }

    public function show_update($id) {
      $user = User::find($id);
      return view('users.edit' ,['users'=>$user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');
        $user->update();
    return redirect() -> route('users');
    }
    public function recharging(Request $request, $id)
    {
      $user = User::find(Auth::user() -> id);
      $user->funds = $user->funds+$request->input('fund');
      $user->save();

      // $user->funds += $request->input('fund');
      return redirect('/users');

    // return view('users.index' ,['users'=>$user]);
      /*$rental_id = $request -> input('rental_id');
      $rental = Rental::find($rental_id);
      $user = User::find($rental -> user_id);
      if ($request -> input('damage') == 'minor') {
        if ($rental -> insurance == 0) {
          $user -> funds -= 100;
        }
        $user -> time_damage++;
      } else if ($request -> input('damage') == 'major') {
        if ($rental -> insurance == 0) {
          $user -> funds -= 500;
        }
        $user -> time_damage++;
      }
      if ($user -> time_damage >= 3) {
        $user -> blacklisted = 1;
      }
      $user -> update();*/
    }

    public function manage_user(){
      $users = User::all();
    $retals = Retal::all();
    $computers = Computer::all();
  
      return view('users.manage_user', [   /**!!!!!!!!!!!!!!!!!!!!!!!!!!!not sure if this shou change file name oir fuc name?            products.index--}} */
      'computers' =>$computers,
       'users'=>$users,
    'retals'=>$retals]);
  }
  public function manager_dashboard(){
    $users = User::all();
  $retals = Retal::all();
  $computers = Computer::all();

    return view('users.manager_dashboard', [   /**!!!!!!!!!!!!!!!!!!!!!!!!!!!not sure if this shou change file name oir fuc name?            products.index--}} */
    'computers' =>$computers,
     'users'=>$users,
  'retals'=>$retals]);
}





    public function show_blacklist($id) {
      $user = User::find($id);
      return view('users.blacklist_update' ,['users'=>$user]);
    }


	public function blacklist_update(Request $request, $id){

        $user = User::find($id);
        $user->blacklisted = $request->input('blacklisted');
        $user->save();

     	// return redirect() -> route('blacklist_update');
      return redirect() -> route('manage_user');

    }


    public function show_staff($id) {
      $user = User::find($id);
      return view('users.staff_update' ,['users'=>$user]);
    }


	public function staff_update(Request $request, $id){

        $user = User::find($id);
        $user->description = $request->input('staff_update');
        $user->save();

        return redirect() -> route('manage_user');

    }


    public function delete($id)
    {
       $user = User::where('id',$id)->first();
        $user->delete();
        return redirect() -> route('manage_user');
    }


	public function dashboard(){
    $dashboard = [];
    $dashboard['user_count']= User::all() -> count();
    $dashboard['staff_count'] = User::where('description', '=', 'staff') -> count();
    $dashboard['blacklist_count'] = User::where('blacklisted', '=', 'Yes') -> count();
    $dashboard['computer_count'] = Computer::all() -> count();
    $dashboard['notReturn_count'] = Computer::where('availability', '=', 'In_use') -> count();
    

    return view('/users/manager_dashboard',['dashboard'=>$dashboard]);
  
    }






}
?>


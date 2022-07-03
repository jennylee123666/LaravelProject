<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Computer;
use App\Models\User;
use App\Http\Controllers\UserController;
use Auth;

class ProductsController extends Controller
{
    public function __construct(){
    $this->middleware('auth')->except('show');
}   


    public function index()
    {
      $computers = Computer::all();
      $users = User::all();
    return view('computers.index', [   /**!!!!!!!!!!!!!!!!!!!!!!!!!!!not sure if this shou change file name oir fuc name?            products.index--}} */
    'computers' =>$computers,
      'users'=>$users]);
    
  
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('computers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    $request->validate([
     'brand'=>'required',
     'Operating_system'=>'required',
     'Display_size' =>'required',
      'RAM' =>'required',
      'num_USB_port'=>'required',
      'HDMI_port' =>'required',
      'Rental_price' =>'required', 
      'image'=>'mimes:jpg,png,jpeg'
     ]);
    $newImageName = time() . '-' . $request->brand . '.' . 
    $request->image->extension();
    //   $newImageName = 'image';
    $request->image->move(public_path('images'),$newImageName);

       $computer = Computer::create([
          'brand' =>$request->input('brand'),
          'Operating_system' =>$request->input('Operating_system'),
          'Display_size' =>$request->input('Display_size'),
          'RAM' =>$request->input('RAM'),
          'num_USB_port' =>$request->input('num_USB_port'),
          'HDMI_port' =>$request->input('HDMI_port'),
          'Rental_price' =>$request->input('Rental_price'), 
          'image_path'=>$newImageName,    
          'availability' =>$request->input('availability'),  
          // 'image_path' =>$newImageName,
          'user_id'=> auth()->user()->id
     ]);

   //   protected $fillable=['id','brand','Operating_system','Display_size','RAM','num_USB_port','HDMI_port','Rental_price'];
 return redirect('/computers');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $computer = Computer::where('id',$id)->first();
      return view('computers.edit' ,['computers'=>$computer]);
    }

    
    public function update(Request $request)
    {
        $computer = Computer::where('id', $request -> input('id'))->first();
        $computer->brand = $request->brand;
        $computer->Operating_system = $request->Operating_system;
        $computer->Display_size = $request->Display_size;
        $computer->RAM = $request->RAM;
        $computer->HDMI_port = $request->HDMI_port;
        $computer->Rental_price = $request->Rental_price;
        $computer->availability = $request->availability;
        if ($request -> hasFile('image')) {
          $request -> file('image') -> move(public_path('images'), $computer -> image_path);
    }
    
    $computer->save();
      return redirect('/computers');

    // UserAccountController update FUNCTION
    // $user = User::find(Auth::user() -> id);
    // $user -> balance = $user -> balance + $request -> input('amount');
    // $user -> save();
    // redirect
    }

    
    public function delete($id)
    {
       $computer= Computer::where('id',$id)->first();
        $computer->delete();
        return redirect('/computers');
    }







	public function search(){
    	$search_text = $_GET['query'];
    	$products = Computer::where('brand', 'LIKE', '%' . $search_text . '%' )->get ();  
    	return view('computers.search', compact('products'));
    }


}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainPageController extends Controller
{
    public function index(){
    return view('main');
}
public function products(){
    return view('computers');
}

    public function about(){
    return view ('about');
    }

    public function account_detail(){
        return view ('account_detail');
        }
}
?>
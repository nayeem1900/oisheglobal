<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    //Admin
public function index(){

    if(Auth::user()->role_id ==2){
        return view('dashboard');
    }else{
        return view('admin.dashboard');
    }





}

}

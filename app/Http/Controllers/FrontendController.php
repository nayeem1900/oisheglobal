<?php

namespace App\Http\Controllers;

use App\Models\UserInfo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
//dd('ok');
        return view('welcome');
    }




}

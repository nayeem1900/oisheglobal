<?php

namespace App\Http\Controllers;

use App\Models\Baner;
use App\Models\UserInfo;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //

    public function index(){
//dd('ok');
       $data['baner'] = Baner::first();
        return view('welcome',$data);
    }




}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Userbaner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBanerController extends Controller
{
    //
    //
    public function viewBaner(){



        $data['allData']=Userbaner::all();


        return view ('admin.user_baner.user-baner-view', $data);


    }

    public function addBaner(){

        $data['user']=User::all();
        return view('admin.user_baner.create-ubaner');

    }
    public function storeBaner(Request $request){

        $data =new Userbaner();
        $data->user_id = Auth::user()->id;

        if ($request->file('img')) {

            $file = $request->file('img');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/pic'), $filename);
            $data['img'] = $filename;
        }
        $data->save();
        session()->flash('success',' Data save success');
        return redirect()->route('baner.view');
    }
    public function editBaner($id){

        $editData=Baner::find($id);
        return view('admin.baner.edit-baner',compact('editData'));
    }
    public function updateBaner(Request $request,$id){


        $data =Baner::find($id);
        //$data->updated_by=Auth::user()->id;
//    dd($data->toArray());
//        dd($request->all());
        if ($request->file('img')) {

            $file = $request->file('img');


            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/pic'), $filename);
            $data['img'] = $filename;
        }
        $data->save();

        session()->flash('success',' Logo update success');
        return redirect()->route('baner.view');


    }



}

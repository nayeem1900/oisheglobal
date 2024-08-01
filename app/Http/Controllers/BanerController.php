<?php

namespace App\Http\Controllers;

use App\Models\Baner;
use Illuminate\Http\Request;

class BanerController extends Controller
{
    //
    public function viewBaner(){


        $data['countLogo']=Baner::count();
        $data['allData']=Baner::all();


        return view ('admin.baner.view-baner', $data);


    }

    public function addBaner(){


        return view('admin.baner.create-baner');

    }
    public function storeBaner(Request $request){

        $data =new Baner();

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
//    public function edit($id){
//
//        $editData=Logo::find($id);
//        return view('backend.logo.edit-logo',compact('editData'));
//    }

}

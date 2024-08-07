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

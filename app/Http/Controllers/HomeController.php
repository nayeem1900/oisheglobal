<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Country;
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
//Branch

    public function viewBranch(){


        $data['allData']=Branch::all();


        return view ('admin.branch.view_branch',$data);


    }



    public function addBranch(){

        return view('admin.branch.create_branch');
    }
    public function store(Request $request){

        $brnach = new Branch();
        $brnach->name = $request->name;
        $brnach->save();
        return view('admin.branch.view_branch');
    }
    public function editBranch($id){

        $editData=Branch::find($id);
        return view('admin.branch.create_branch',compact('editData'));
    }

    public function updateBranch(Request $request,$id){

        $data =Branch::find($id);

        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('branch.view');

    }

//Country
    public function viewCountry(){

     $data['allCountry'] =Country::all();

      return view('admin.country.view_country',$data);

    }


    public function addCountry(){

        return view('admin.country.create_country');
    }
    public function storeCountry(Request $request){

        $brnach = new Country();
        $brnach->name = $request->name;
        $brnach->save();
        return redirect()->route('country.view');
    }
    public function editCountry($id){

        $editData=Country::find($id);
        return view('admin.country.create_country',compact('editData'));
    }

    public function updateCountry(Request $request,$id){

        $data =Country::find($id);

        $data->name=$request->name;

        $data->save();
        session()->flash('success',' class update success');
        return redirect()->route('country.view');

    }


}

<?php

namespace App\Http\Controllers;

use App\Models\Agent;
use App\Models\Branch;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;
class AgentController extends Controller
{
    //
    //view

    public function viewAgent(){


        $users =User::where('role_id', 3)->get();
        return view('admin.agent.view_agent',compact('users'));

    }
public function addAgent(){

    $branches = Branch::all();
    $roles =Role::where('id','!=',2)
        ->get();

    return view('admin.agent.create_agent', compact('roles','branches'));

}

public function storeAgent(Request $request){

    // dd($request->all());

    $user = new User();

    $code=(mt_rand(10,100));
    $user->code=$code;

    $user->branch_id = $request->branch_id;
    $user->role_id= 3;
    $user->status= 0;
    $user->phone = $request->phone;
    $user->email = $request->email;
    $user->name = $request->name;
    $user->password = $request->password;
    $user->save();



    return redirect()->route('agent.view');

}

public function editAgent ($id){

    $users = User::find($id);
    $branches = Branch::all();
    $roles =Role::where('id','=',3)->get();

    return view('admin.agent.edit-agent',compact('users','roles','branches'));
}

    public function updateAgent(Request $request,$id){


        $user = User::find($id);
        $user->branch_id = $request->branch_id;
        $user->role_id= 3;
        $user->status= 0;
        $user->phone = $request->phone;
        $user->email = $request->email;
        $user->name = $request->name;
        $user->password = $request->password;
        $user->save();


        return redirect()->route('agent.view');
    }



}

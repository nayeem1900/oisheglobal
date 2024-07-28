<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class SubadminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $users =User::with('role')->where('role_id','!=',2)->get();
        return view('admin.subadmin.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $branches = Branch::all();
        $roles =Role::where('id','!=',2)
        ->get();

        return view('admin.subadmin.create_subadmin', compact('roles','branches'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        //dd($request->all());
//        $request->validate ([
//            'name' => 'required|numeric|unique:permissions,role_id'
//        ]);
       // $request['password'] = Hash::make($request->password);
        User::create($request->all());

        return redirect()->route('subadmin.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $users = User::find($id);
        $branches = Branch::all();
        $roles =Role::where('id','!=',2)->get();
        return view('admin.subadmin.edit',compact('users','roles','branches'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

//        $request->validate([
//            'name'=>'required|exists:permissions,role_id'
//        ]);

        if($request->password == null) {

            $request['password'] == auth()->user->password;
        }else{
            $request['password'] = Hash::make($request->password);
        }

        User::findOrFail($id)->update($request->all());

        return redirect()->route('subadmin.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        User::findOrFail($id)->delete();
        return redirect()->route('subadmin.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use App\Models\Role;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $permissions =Permission::with('role')->get();
        return view('admin.permission.index',compact('permissions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $roles =Role::where('id','!=',2)->get();
        return view('admin.permission.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
       // dd($request->all());
//        $request->validate ([
//            'name' => 'required|numeric|unique:permissions,role_id'
//        ]);
        Permission::create($request->all());

        return redirect()->route('permission.index');
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
        $permission = Permission::find($id);
        $roles =Role::where('id','!=',2)->get();
        return view('admin.permission.edit',compact('permission','roles'));
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

        Permission::findOrFail($id)->update($request->all());

        return redirect()->route('permission.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Permission::findOrFail($id)->delete();
        return redirect()->route('permission.index');
    }
}

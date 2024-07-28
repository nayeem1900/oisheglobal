<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //

        $roles =Role::where('id','!=',2)->get();
        return view('admin.role.index',compact('roles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //

        return view('admin.role.create_role');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //

        $request->validate ([
            'name' => 'required|unique:roles,name'
        ]);
        Role::create($request->all());

        return redirect()->route('role.index');
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
        $role = Role::find($id);
        return view('admin.role.edit_role',compact("role"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //

        $request->validate([
            'name'=>'required|unique:roles,name'
        ]);
        Role::findOrFail($id)->update($request->all());

        return redirect()->route('role.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
        Role::findOrFail($id)->delete();
        return redirect()->route('role.index');
    }
}

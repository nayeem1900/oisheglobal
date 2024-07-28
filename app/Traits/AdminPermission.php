<?php
namespace App\Traits;

Trait AdminPermission{

public function checkRequestPermission(){

    if(
    empty(auth()->user()->role->permission['permission']['createuser']['list']) && \Route::is('subadmin.index') ||
    empty(auth()->user()->role->permission['permission']['createuser']['list']) && \Route::is('subadmin.index')


    ){

    return response()->view('admin.admin_panel');
    }

}
}
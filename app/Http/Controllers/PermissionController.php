<?php

namespace App\Http\Controllers;

use App\Models\Permission;
use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function create_permission(Request $request){
        if($request->permission > 0){
            foreach($request->permission as $item){
                 $permission = new Permission();
                 $permission->user_id = $request->user_id;
                 $permission->permission = $item;
                 $permission->save();
                }
                return redirect()->back()->with('success', 'Permission created successfully');

         }else{
             return redirect()->back();
         }

    }
}

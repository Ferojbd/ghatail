<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RoleController extends Controller
{
    public function role_page(){ 
        $role = Role::all();
        return view('backend.role.role_page')->with('role', $role);
    }
    public function add_role(){
        return view('backend.role.add_role');
    }
    public function add_role_action(Request $request){
        $request->validate(['role' => 'required']);

        Role::create($request->all());
        return redirect()->route('role');
    }

    public function delete_role($id){
        Role::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function edit_role($id){
        $role = Role::findOrFail($id);
        return view('backend.role.edit_role')->with('role', $role);
    }

    public function edit_role_action(Request $request){
        $role = Role::findOrFail($request->id);
        $role->update($request->all());
        return redirect()->route('role');
    }
}

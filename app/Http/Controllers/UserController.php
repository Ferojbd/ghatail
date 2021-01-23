<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function user_page(){
        $user = User::all();
        // return $user;
        return view('backend.user.user')->with('users', $user);
    }

    public function add_user(){
        $role = Role::all();
        return view('backend.user.add_user')->with('role', $role);
    }

    public function edit_user($id){
        $user = User::findOrFail($id);
        $role = Role::all();
        return view('backend.user.edit_user')->with(['user' => $user, 'role' => $role]);
    }

    public function add_user_action(Request $request){
        // return $request->role;
        $user =  $this->validate($request, [
            'name' => 'required|min:3|max:50',
            'email' => 'email|required|unique:users',
            'phone' => 'required',
            'role' => 'required',
            'password' => 'required|confirmed|min:6',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->save();
        return redirect()->route('user')->with('message', 'User created successfully');
    }
    // public function add_user_action(Request $request){
    //     // return $request->role;
    //     $user =  $this->validate($request, [
    //         'name' => 'required|min:3|max:50',
    //         'email' => 'email|required|unique:users',
    //         'phone' => 'required',
    //         'role' => 'required',
    //         'password' => 'required|confirmed|min:6',
    //     ]);
    //     $user = new User();
    //     $user->name = $request->name;
    //     $user->email = $request->email;
    //     $user->phone = $request->phone;
    //     $user->password = Hash::make($request->password);
    //     if($user->save()){
    //         $last = User::orderBy('id', 'desc')->first();
    //         foreach($request->role as $role){
    //             $q = new RoleUser();
    //             $q->role_id = $role;
    //             $q->user_id = $last->id;
    //             $q->save();
    //         }
    //     }
    //     return redirect()->route('user')->with('msg', 'User created successfully');
    // }

    public function delete_user($id){
        User::findOrFail($id)->delete();
        return redirect()->back();
    }

    public function edit_user_action(Request $request){
        $user = User::findOrFail($request->id);
        $user->update($request->all());
        
        $last = User::findOrFail($request->id);
        foreach($request->role as $role){
            $q = new RoleUser();
            $q->role_id = $role;
            $q->user_id = $last->id;
            $q->save();          
        }
        return redirect()->route('user');
    }
}

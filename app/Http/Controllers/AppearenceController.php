<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AppearenceController extends Controller
{
    public function index(){
        $user = User::all()->except(Auth::id());
        return view('backend.appear.appearence')->with('users', $user);
    }
    
}

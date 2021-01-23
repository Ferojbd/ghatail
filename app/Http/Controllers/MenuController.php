<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function menu_index(): string{
        return view('backend.menu.menu');
    }
}

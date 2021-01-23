<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryNewsController extends Controller
{
    public function index($category){
        $cat = Category::where('category', '=', $category)->with('Post')->get();
        $catten = Category::where('category', '=', $category)->orderBy('id', 'desc')->with('Postlimitten')->first();
        return view('frontend.category-news')->with(['cat_post' => $cat, 'catten' =>  $catten]);
    }
}

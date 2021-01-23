<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class TrushController extends Controller
{
    public function index(){
        $news = Post::where('deleted', '1')->orderBy('id', 'desc')->get();
        return view('backend.trush.trush')->with('news', $news);
    }

    public function recycle_news($id){
        $post = Post::findOrFail($id);
        $post->deleted = 0;
        $post->save();
        return redirect()->back();
    }

    public function delete_trush($id){
        Post::findOrFail($id)->delete();
        return redirect()->back();
    }
}

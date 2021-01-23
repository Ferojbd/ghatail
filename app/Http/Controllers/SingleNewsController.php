<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class SingleNewsController extends Controller
{
    public function index($id){
        $news = Post::findOrFail($id);
        // return $news;

        $cids = $news->Category->pluck('id')->toArray();
        // dd($cids);
        $rel_news = Post::with('Category')->whereHas('Category', function($q) use ($cids){
            $q->whereIn('categories.id', $cids);
        })->take(10)->get();
        // dd($rel_news);

        return view('frontend.single_news')->with(['news' => $news, 'rel_news' => $rel_news]);
    }


    public function search(Request $request){
        $news = Post::where('headline', 'like', "%$request->q%")->take(35)->get();
        return view('frontend.search', compact('news'));
    }
}



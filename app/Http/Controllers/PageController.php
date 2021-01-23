<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function post(){
        $all_post = Post::where('deleted','=',0)->orderBy('id', 'desc')->take(4)->get();
        $ghatail = Category::where('category', '=', 'ঘাটাইল')->with('PostlimitFive')->first();
        // return $ghatail;
        $tangail = Category::where('category', '=', 'টাঙ্গাইল')->with('Postlimit')->first();
        // return $tangail;
        // $post_title = Post::where('deleted','=',0)->orderBy('id', 'desc')->pluck('headline');
        $jatiya = Category::where('category','=','জাতীয়')->with('Postlimit')->first();
        $prochod = Category::where('category','=','প্রচ্ছদ')->with('Postlimit')->first();
        $tothoProjucti = Category::where('category','=','তথ্যপ্রযুক্তি')->with('Postlimitfour')->first();
        // return $tothoProjucti;
        $sikhaongon = Category::where('category','=','শিক্ষাঙ্গন')->with('Postlimitfour')->first();
        // return $sikhaongon;
        $international = Category::where('category','=','আন্তর্জাতিক')->with('PostlimitSix')->first();
        $justics = Category::where('category', '=','আইন আদালত')->with('Postlimitfour')->first();
         
        $bangladesh = Category::where('category','=','বাংলাদেশ')->with('PostlimitSix')->first();
        $world = Category::where('category','=','বিশ্ব')->with('PostlimitSix')->first();
        $ortho_banijha = Category::where('category','=','অর্থ-বাণিজ্য')->with('Postlimit')->first();
        $politics = Category::where('category','=','রাজনীতি')->with('Postlimitfour')->first();
        
        // return $politics;
        $jonodorbog = Category::where('category', '=', 'জনদুর্ভোগ')->with('Postlimitfour')->first();
        // return $jonodorbog;

        $corona = Category::where('category', '=', 'করোনা')->with('Postlimit')->first();
       
        $coronaSide = Category::where('category', '=', 'করোনা')->with('PostlimitFive')->first(); //
        //  dd($coronaSide);
        $onusondhan = Category::where('category','=','অনুসন্ধান')->with('Postlimit')->first();
        $culture = Category::where('category','=','শিল্প-সাহিত্য')->with('Postlimitfour')->first();
        $environment = Category::where('category','=','পরিবেশ-প্রতিবেশ')->with('Postlimitfour')->first();
        $entertainment = Category::where('category','=','বিনোদন')->with('PostlimitFive')->first();
        // return $entertainment;
        $orthonity = Category::where('category', '=', 'অর্থনীতি')->with('Postlimitfour')->first();
        // return $orthonity;
        $sports = Category::where('category','=','খেলাধুলা')->with('Postlimitfour')->first();
        $motamot = Category::where('category','=','মতামত')->with('PostlimitTwo')->first();
        $sompadokio = Category::where('category','=','সম্পাদকীয়')->with('PostlimitTwo')->first();
        $letestNews = Post::orderBy('id', 'desc')->limit(7)->get();
        // return $jatiya;
        return view('frontend.home')->with([
                    'all_post' => $all_post,
                    'tangail' => $tangail,
                    'ghatail' => $ghatail, 
                    'jatiya' => $jatiya, 
                    'international' => $international, 
                    'bangladesh' => $bangladesh, 
                    'ortho_banijha' => $ortho_banijha,
                    'politics' => $politics,
                    'onusondhan' => $onusondhan,
                    'culture' => $culture,
                    'environment' => $environment,
                    'entertainment' => $entertainment,
                    'sports' => $sports,
                    'corona' => $corona,
                    'letestNews' => $letestNews,
                    'coronaSide' => $coronaSide,
                    'world' => $world,
                    'prochod' => $prochod,
                    'sikhaongon' => $sikhaongon,
                    'tothoProjucti' => $tothoProjucti,
                    'motamot' => $motamot,
                    'sompadokio' => $sompadokio,
                    'justics' => $justics,
                    'jonodorbog' => $jonodorbog,
                    'orthonity' => $orthonity,
        ]); 
    }
}

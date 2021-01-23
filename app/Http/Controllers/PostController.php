<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\CategoryPost;
use App\Models\Post;
use App\Models\RoleUser;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

use Intervention\Image\ImageManagerStatic as Image;

class PostController extends Controller
{
    public function post(){
        $news = Post::where('deleted', '0')->orderBy('id', 'desc')->take(1000)->get();
        return view('backend.post.Post')->with('news', $news);
    }
    public function post_news(){
        $cat = Category::with('Children')->get();
        $user = User::all()->except(Auth::id());
        return view('backend.post.add_post')->with(['category' => $cat, 'users' => $user]);
    }
    public function edit_news($id){
        $news = Post::findOrFail($id);
        return view('backend.post.edit_post')->with('news', $news);
    }
    
    public function post_news_action(Request $request){
        // return $request->all();
        $request->validate([
            'headline' => 'required',
            'newsbody' => 'required',
            'short_details' => 'required',
            // 'keywords' => 'required',
            'category' => 'required'
        ]);

        $news = new Post();
        $news->headline = $request->headline;
        $news->short_details = $request->short_details;
        $news->newsbody = $request->newsbody;
        // $news->keywords = $request->keywords;
        if($request->publisher){
            $news->publisher = $request->publisher;
        }
        else{

            $news->publisher = Auth::user()->name;
        }
        if($request->status){
            $news->status = $request->status;
        }

        //image
        if ($request->file('news_img')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpg,png,jpeg,gif'
            ]);

            $file = $request->file('news_img');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            // resize image
            $image_resize = Image::make($file->getRealPath());
            $image_resize->fit(400, 250);
            $image_resize->save(public_path('/uploads/news/' . $photo));

            $destination = public_path('/uploads/news/original');
            $file->move($destination, $photo);
            if ($news->mosque_img != null) {
                $img_del = public_path('/uploads/news/' . $news->news_img);
                if (file_exists($img_del)) {
                    unlink($img_del);
                }
            }
            $news->news_img = $photo;
        }
        if($news->save())
            {
                $last = Post::orderBy('id', 'desc')->first();
                
                foreach($request->category as $cat){
                    // return $last->id;
                    $cate = DB::table('category_posts');
                    $data = array('category_id' => $cat, 'post_id' => $last->id, 'created_at' => Carbon::now());
                    $cate->insert($data);
                    // $cate = new CategoryPost();
                    // $cate->cat_id = $cat;
                    // $cate->post_id = $last->id;
                    // $cate->save();
                }
            }
        return redirect()->route('post');
    }

    public function edit_news_action(Request $request){
        $news = Post::findOrFail($request->id);
        if($request->headline){
            $news->headline = $request->headline;
        }
        if($request->newsbody){
            $news->newsbody = $request->newsbody;
        }
        if($request->status){
            $news->status = $request->status;
        }
        if($request->publisher){
            $news->publisher = $request->publisher;
        }
          if ($request->file('news_img')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpg,png,jpeg,gif'
            ]);

            $file = $request->file('news_img');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            // return $photo;
            $destination = public_path('/uploads/news');
            $file->move($destination, $photo);
            if ($news->mosque_img != null) {
                $img_del = public_path('/uploads/news' . $news->news_img);
                if (file_exists($img_del)) {
                    unlink($img_del);
                }
            }

            $news->news_img = $photo;
        }
        $news->save();
        return redirect()->route('post');
    }

    public function delete_news($id){
        $post = Post::findOrFail($id);
        $post->deleted = 1;
        $post->save();
        return redirect()->back()->with('delete', 'Data deleted successfully');
    }
    
    public function dash(){
        $post = DB::table('posts')->count();
        $newposts = Post::whereDate('created_at', Carbon::today())->count();
        // return $newposts;
        return view('backend.dashboard')->with(['all_post'=> $post, 'newposts' => $newposts]);
    }
}
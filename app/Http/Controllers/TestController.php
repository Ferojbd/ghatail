<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Test;
use App\Models\WpressDb;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\ImageManagerStatic as Image;


class TestController extends Controller
{
    // public function index(){
    //     WpressDb::create([
    //         'name' => 'ranu',
    //         'email' => 'info@gmail.com',
    //         'phone' => '1321654657498',
    //         'country' => 'country',
    //         'city' => 'Dhaka',
    //         ]);
    //     return "success";
    // }

    // public function getTest(){
    //     $wps = DB::connection('mysql2')->table('wp2a_posts')->orderBy('id', 'desc')
    //     ->where('post_status', '=', 'publish')
    //     ->where('post_content', '!=', '')
	// 	->where('post_title', '!=', '')
	// 	->where('post_type', 'post')
	// 	->where('post_status', 'publish')
    //     ->get();
    //         //   ->get()
    //         //   ->map(function($wp){
    //         //       return [
    //         //           'id' => $wp->id,
    //                 //   'name' => $wp->name,
    //                 //   'email' => $wp->email,
    //                 //   'city' => $wp->city,
    //         //       ];
    //         //   });
    //         //   foreach($wps as $item){
    //         //     $n = new Test();  
    //         //     $n->name = $item['name'];
    //         //     $n->email = $item['email'];
    //         //     $n->city = $item['city'];
    //         //     $n->save();
    //         //  } 
    //     return $wps;      
    // }

    public function exampleImport(){
        // $imageUrl = 'http://ghatail.com/wp-content/uploads/2017/09/চলচ্চিত্র.jpg';
        // $img_arr = explode('/', $imageUrl);
        // // dd($img_arr);
        // $img_new_arr = [];
        // foreach($img_arr as $key => $img){
        //     if($img != 'http:'){
        //         $img_new_arr[$key] = urlencode($img);
        //     }else{
        //         $img_new_arr[$key] = $img;
        //     }
        // }
        // $imageUrl = implode('/', $img_new_arr);
        // // dd($imageUrl);

        // $ch = curl_init($imageUrl);
        // curl_setopt($ch, CURLOPT_NOBODY, true);
        // curl_exec($ch);
        // $retCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        // curl_close($ch);
        // // dd($retCode);   

        // // if ($retCode == 200){
        //     $image = file_get_contents($imageUrl);
        //     dd($image);
        // //     if ($image !== false){
        // //         $iamge = 'data:image/jpg;base64,' . base64_encode($image);
        // //     }
        // // }
        // // dd(123);

        ini_set('max_execution_time', 60 * 30);
        $rUrl = file_get_contents('http://localhost/mdsatu-pro-wordpress-exporter-4844d425b336/public/export');
        $all_data = json_decode($rUrl, true);
        // dd($all_data[0]);


        foreach($all_data as $data){
            $query = new Post();
            $query->publisher_id = $data['post_author'];
            $query->publisher = auth()->user()->name;
            $query->headline = $data['post_title'];
            // dd(json_decode("wertwert"));
            $query->keywords = json_decode($data['post_name']);
            $query->newsbody = $data['post_content'];
            // dd(Carbon::parse($data['post_date']));
            $query->created_at = $data['post_date'];
            // $query->created_at = Carbon::parse($data['post_date']);
            // $query->updated_at = $data->post_date;
            // $date = Carbon::createFromFormat('Y-m-d H:i:s', $data['post_date'])->format('Y.m.d');
            
            // return $date;
            if($data['post_excerpt']){
                $query->short_details = $data['post_excerpt'];
            }
            // dd($data['image']);

            if ($data['image']){
                $imageUrl = $data['image']['guid'];

                $img_arr = explode('/', $imageUrl);
                // dd($img_arr);
                $img_new_arr = [];
                foreach($img_arr as $key => $img){
                    if($img == 'http:' || $img == 'https:'){
                        $img_new_arr[$key] = $img;
                    }else{
                        // if($img == 'ghatail.com'){
                        //     $img_new_arr[$key] = urlencode($img) . '/20';
                        // }else{
                            $img_new_arr[$key] = urlencode($img);
                        // }
                    }
                }
                $imageUrl = implode('/', $img_new_arr);
                // dd($imageUrl);

                $ch = curl_init($imageUrl);
                curl_setopt($ch, CURLOPT_NOBODY, true);
                curl_exec($ch);
                $retCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
                curl_close($ch);
                // dd($retCode);

                if ($retCode == 200){
                    // Big Image
                    $image = file_get_contents($imageUrl);
                    // dd($image);
                    if ($image !== false){
                        $iamge = 'data:image/jpg;base64,' . base64_encode($image);
                    }
                    $UPLOAD_DIR = 'uploads/news/original/';
                    $img = $iamge;
                    $img = str_replace('data:image/jpg;base64,', '', $img);
                    $img = str_replace('data:image/png;base64,', '', $img);
                    $img = str_replace(' ', '+', $img);
                    $bdata = base64_decode($img);
                    $name = uniqid() . '.png';
                    $file = $UPLOAD_DIR . $name;
                    file_put_contents($file, $bdata);
                    
                    $query->news_img = $name;
                }
                

                // Crop Image
                // $cimage = public_path('uploads/news/original/' . $name);

                // if (file_exists($cimage)) {
                //     // Save Big Image
                //     $image_resize = Image::make($cimage);
                //     $image_resize->resize(330, 200);
                //     $image_resize->save(public_path('/uploads/news/big/' . $name));

                //     // Save Small Image
                //     $image_resize2 = Image::make($cimage);
                //     $image_resize2->resize(140, 110);
                //     $image_resize2->save(public_path('/uploads/news/small/' . $name));
                // }
            }

            if($query->save()){
                // Generate Category
                $cat_array = [];
                foreach($data['category'] as $category){
                    $c_check = Category::where('category', $category['terms']['name'])->first();

                    if(!$c_check){
                        $c_check = new Category();
                        $c_check->category = $category['terms']['name'];
                        $c_check->save();
                    }

                    $cat_array[] = [
                        'post_id' => $query->id,
                        'category_id' => $c_check->id
                    ];
                }
                // Category Relation
                DB::table('category_posts')->insert($cat_array);
            }
            // dd(123);
        }

        return "success";
    }
}

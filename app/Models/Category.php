<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
    protected $fillable = ['category'];

    public function Post(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(40);
    }
    public function Postlimit(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(8);
    }
    public function PostlimitSix(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(6);
    }
    public function Postlimitfour(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(4);
    }
    public function PostlimitFive(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(5);
    }
    public function PostlimitTwo(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(2);
    }
    public function Postlimitten(){
        return $this->belongsToMany(Post::class, 'category_posts', 'category_id', 'post_id')->orderBy('id', 'desc')->limit(10);
    }
   public function Parent() {
    return $this->belongsTo(Category::class, 'parent_id');
   }
   public function Children() {
    return $this->hasMany(Category::class, 'parent_id','id');
   }

}

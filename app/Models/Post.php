<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $fillable = ['headline', 'newsbody','short_details','keywords', 'news_img', 'status', 'publisher'];

    public function Category(){
        return $this->belongsToMany(Category::class, 'category_posts', 'post_id', 'category_id');
    }

    public function getImgPathAttribute(){
        if($this->news_img){
            return asset('uploads/news/original/' . $this->news_img);
        }else{
            return null;
        }
    }

    public function getRouteAttribute(){
        return route('single-news', $this->id);
    }

    public function getAdsBodyAttribute(){
        $ad_code = Info::where('group', 'general')->where('name', 'ad_code')->first();

        if($ad_code){
            $paragraphs  = explode('</div>', $this->newsbody);
            $new_content = '';

            foreach ($paragraphs as $paragraph) {
                $new_content .= $paragraph;
                if($paragraph != ''){
                    $new_content .= $ad_code->value . '</div>';
                }
            }

            return $new_content;
        }
        return $this->newsbody;
    }
}

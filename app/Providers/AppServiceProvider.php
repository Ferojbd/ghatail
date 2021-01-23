<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Post;
use Facade\FlareClient\View;
use Harimayco\Menu\Models\Menus;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('*', function ($view) {
            $nav_items = Menus::where('name','Main Menu')->with('items')->first();
            // return $nav_items;
            // $nav_aro = Category::skip(8)->take(20)->where('parent_id', null)->get();
            $post_title = Post::where('deleted','=',0)->orderBy('id', 'desc')->pluck('headline');
            $view->with(['nav_items' => $nav_items, 'post_title' => $post_title]);  
        });
    }
}

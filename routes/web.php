<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'App\Http\Controllers\PageController@post')->name('home');
Route::get('/test', 'App\Http\Controllers\TestController@exampleImport')->name('test');
Route::get('/db_migrate', 'App\Http\Controllers\DBMigController@doimport')->name('db_migrate');

Route::get('/news/{id}', 'App\Http\Controllers\SingleNewsController@index')->name('single-news');
Route::get('/news/category/{category}', 'App\Http\Controllers\CategoryNewsController@index')->name('category.single');
Route::get('/news-search', 'App\Http\Controllers\SingleNewsController@search')->name('search');
Route::get('/wpcreate', 'App\Http\Controllers\TestController@index');
Route::get('/getTest', 'App\Http\Controllers\TestController@getTest');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', 'App\Http\Controllers\PostController@dash')->name('dashboard');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dash', 'App\Http\Controllers\PostController@dash')->name('dash');
// Route::middleware(['auth:sanctum', 'verified'])->get('/post', 'PostController@post')->name('post');
//post
Route::middleware(['auth:sanctum', 'verified'])->get('/post', 'App\Http\Controllers\PostController@post')->name('post');
Route::middleware(['auth:sanctum', 'verified'])->get('/post/add-news', 'App\Http\Controllers\PostController@post_news')->name('add-news');
Route::middleware(['auth:sanctum', 'verified'])->post('/post/news-action', 'App\Http\Controllers\PostController@post_news_action')->name('news-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/post/edit-news/{id}', 'App\Http\Controllers\PostController@edit_news')->name('edit-news');
Route::middleware(['auth:sanctum', 'verified'])->get('/post/delete-news/{id}', 'App\Http\Controllers\PostController@delete_news')->name('delete-news');
Route::middleware(['auth:sanctum', 'verified'])->post('/post/edit-news-action', 'App\Http\Controllers\PostController@edit_news_action')->name('edit-news-action');
//category
Route::middleware(['auth:sanctum', 'verified'])->get('/category', 'App\Http\Controllers\CategoryController@category')->name('category');
Route::middleware(['auth:sanctum', 'verified'])->get('/category/add-category', 'App\Http\Controllers\CategoryController@add_category')->name('add-category');
// Route::middleware(['auth:sanctum', 'verified'])->get('/category/edit-category/{id}', 'App\Http\livewire\LoadData')->name('edit-category');
// Route::middleware(['auth:sanctum', 'verified'])->get('/category/add-category-action', 'App\Http\Controllers\CategoryController@add_category_action')->name('add-category-action');
//user
Route::middleware(['auth:sanctum', 'verified'])->get('/user', 'App\Http\Controllers\UserController@user_page')->name('user');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/add-user', 'App\Http\Controllers\UserController@add_user')->name('add-user');
Route::middleware(['auth:sanctum', 'verified'])->post('/user/add-user-action', 'App\Http\Controllers\UserController@add_user_action')->name('add-user-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/edit-user/{id}', 'App\Http\Controllers\UserController@edit_user')->name('edit-user');
Route::middleware(['auth:sanctum', 'verified'])->post('/user/edit-user-action', 'App\Http\Controllers\UserController@edit_user_action')->name('edit-user-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/user/delete-user/{id}', 'App\Http\Controllers\UserController@delete_user')->name('delete-user');
//setting
Route::middleware(['auth:sanctum', 'verified'])->get('/setting', 'App\Http\Controllers\SettingController@setting_page')->name('setting');
Route::middleware(['auth:sanctum', 'verified'])->post('/setting', 'App\Http\Controllers\SettingController@settingSubmit');

// role
Route::middleware(['auth:sanctum', 'verified'])->get('/role', 'App\Http\Controllers\RoleController@role_page')->name('role');
Route::middleware(['auth:sanctum', 'verified'])->get('/role/add-role', 'App\Http\Controllers\RoleController@add_role')->name('add-role');
Route::middleware(['auth:sanctum', 'verified'])->get('/role/delete-role/{id}', 'App\Http\Controllers\RoleController@delete_role')->name('delete-role');
Route::middleware(['auth:sanctum', 'verified'])->get('/role/edit-role/{id}', 'App\Http\Controllers\RoleController@edit_role')->name('edit-role');
Route::middleware(['auth:sanctum', 'verified'])->post('/role/add-role-action', 'App\Http\Controllers\RoleController@add_role_action')->name('add-role-action');
Route::middleware(['auth:sanctum', 'verified'])->post('/role/edit-role-action', 'App\Http\Controllers\RoleController@edit_role_action')->name('edit-role-action');

// slider
Route::middleware(['auth:sanctum', 'verified'])->get('/slider', 'App\Http\Controllers\SliderController@slider_page')->name('slider');
Route::middleware(['auth:sanctum', 'verified'])->get('/slider/add-slider', 'App\Http\Controllers\SliderController@add_slider')->name('add-slider');
Route::middleware(['auth:sanctum', 'verified'])->post('/slider/add-slider-action', 'App\Http\Controllers\SliderController@add_slider_action')->name('add-slider-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/slider/delete-slider/{id}', 'App\Http\Controllers\SliderController@delete_slider_action')->name('delete-slider');
Route::middleware(['auth:sanctum', 'verified'])->get('/slider/edit-slider/{id}', 'App\Http\Controllers\SliderController@edit_slider')->name('edit-slider');
Route::middleware(['auth:sanctum', 'verified'])->post('/slider/edit-slider-action', 'App\Http\Controllers\SliderController@edit_slider_action')->name('edit-slider-action');

// poll
Route::middleware(['auth:sanctum', 'verified'])->get('/poll', 'App\Http\Controllers\PollController@poll_page')->name('poll');
Route::middleware(['auth:sanctum', 'verified'])->get('/poll/add-poll', 'App\Http\Controllers\PollController@add_poll_page')->name('add-poll');
Route::middleware(['auth:sanctum', 'verified'])->post('/poll/add-pole-action', 'App\Http\Controllers\PollController@poll_action')->name('add-pole-action');
Route::middleware(['auth:sanctum', 'verified'])->post('/poll/edit-pole-action', 'App\Http\Controllers\PollController@edit_poll_action')->name('edit-pole-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/poll/delete-poll/{id}', 'App\Http\Controllers\PollController@delete_poll')->name('delete-poll');
Route::middleware(['auth:sanctum', 'verified'])->get('/poll/edit-poll/{id}', 'App\Http\Controllers\PollController@edit_poll')->name('edit-poll');

// appearence
Route::middleware(['auth:sanctum', 'verified'])->get('/appearence', 'App\Http\Controllers\AppearenceController@index')->name('appearence');
// Trush
Route::middleware(['auth:sanctum', 'verified'])->get('/trush', 'App\Http\Controllers\TrushController@index')->name('trush');
Route::middleware(['auth:sanctum', 'verified'])->get('/trush/recycle-news/{id}', 'App\Http\Controllers\TrushController@recycle_news')->name('recycle-news');
Route::middleware(['auth:sanctum', 'verified'])->get('/trush/delete-trash/{id}', 'App\Http\Controllers\TrushController@delete_trush')->name('delete-trash');

// category

Route::middleware(['auth:sanctum', 'verified'])->post('/category/category-action', 'App\Http\Controllers\CategoryController@create_category')->name('category-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/category/edit-category/{id}', 'App\Http\Controllers\CategoryController@edit_category')->name('edit-category');
Route::middleware(['auth:sanctum', 'verified'])->post('/category/category-action', 'App\Http\Controllers\CategoryController@create_category')->name('category-action');
Route::middleware(['auth:sanctum', 'verified'])->get('/category/delete-category/{id}', 'App\Http\Controllers\CategoryController@delete_category')->name('delete-category');

// create permission
Route::post('/permission/create-permission', 'App\Http\Controllers\PermissionController@create_permission')->name('create-permission');

// menu 
Route::middleware(['auth:sanctum', 'verified'])->get('/menu/menu-index', 'App\Http\Controllers\MenuController@menu_index')->name('menu');
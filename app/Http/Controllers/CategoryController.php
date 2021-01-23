<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category(){
        $cat = Category::get();
        return view('backend.category.Category')->with('category', $cat);
    }
    public function add_category(){
        $category = Category::all();
        return view('backend.category.add_category')->with('category', $category);
    }
    public function edit_category($id){
        $cat = Category::findOrFail($id);
        return view('backend.category.edit_category')->with('category', $cat);
    }
    public function create_category(Request $request){
        // return $request->all();
        $request->validate([
            'category' => 'required',
        ]);
        $cat = new Category(); 
        $cat->category = $request->category;
        if($request->parent_id){
            $cat->parent_id = $request->parent_id;
        }
        $cat->save();
        return redirect()->route('category')->with('message', 'Category created successfuly');
    }   

    public function delete_category($id){
        Category::findOrFail($id)->delete();
        return redirect()->back()->with('message', 'Category deleted succesfully');
    }

    public function category_action(Request $request){
        // return $request->all();
        $category = Category::findOrFail($request->id);
        // return $category;
        $category->update($request->all());
        return redirect()->route('category')->with('message', 'Category updated successfull');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function slider_page(){
        $slider = Slider::orderBy('position', 'asc')->get();
        return view('backend.slider.slider')->with('slider', $slider);
    }

    public function add_slider(){
        return view('backend.slider.add_slider');
    }

    public function add_slider_action(Request $request){
       
        $request->validate([
            'title' => 'required',
            'short_description' => 'required',
            'position' => 'required',
            'status' => 'required',
            'button_text' => 'required',
            'button_link' => 'required',
        ]);
        
        $slider = new Slider();
        $slider->title = $request->title;
        $slider->short_description = $request->short_description;
        $slider->position = $request->position;
        $slider->status = $request->status;
        $slider->button_text = $request->button_text;
        $slider->button_link = $request->button_link;

        //image
        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpg,png,jpeg,gif'
            ]);

            $file = $request->file('image');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            // return $photo;
            $destination = public_path('/uploads/slider');
            $file->move($destination, $photo);
            if ($slider->image != null) {
                $img_del = public_path('/uploads/slider' . $slider->image);
                if (file_exists($img_del)) {
                    unlink($img_del);
                }
            }
           
            $slider->image = $photo;
        }
        $slider->save();
        return redirect()->route('slider')->with('msg', 'Slider added successfully!!');
    }

    public function delete_slider_action($id){
        $slider = Slider::findOrFail($id);
        $slider->delete();
        return redirect()->back()->with('delete_msg', 'Slide deleted successfully');
    }

    public function edit_slider($id) {
        $slider = Slider::findOrFail($id);
        return view('backend.slider.edit_slider')->with('slider', $slider);
    }

    public function edit_slider_action(Request $request){
        $slider = Slider::findOrFail($request->id);
        if($request->ttitle){
           $slider->title = $request->title;
        }
        if($request->short_description){
           $slider->short_description = $request->short_description;
        }
        if($request->position){
           $slider->position = $request->position;
        }
        if($request->status){
           $slider->button_text = $request->button_text;
           $slider->button_link = $request->button_link;
        }
        if($request->button_text){
           $slider->button_text = $request->button_text;
        }
        if($request->button_link){
           $slider->button_link = $request->button_link;
        }
        if ($request->file('image')) {
            $this->validate($request, [
                'image' => 'image|mimes:jpg,png,jpeg,gif'
            ]);

            $file = $request->file('image');
            $photo = time() . '.' . $file->getClientOriginalExtension();
            // return $photo;
            $destination = public_path('/uploads/slider');
            $file->move($destination, $photo);
            if ($slider->image != null) {
                $img_del = public_path('/uploads/slider' . $slider->image);
                if (file_exists($img_del)) {
                    unlink($img_del);
                }
            }
           
            $slider->image = $photo;
        }
        $slider->save();
        return redirect()->route('slider')->with('msg', 'Slider added successfully!!');
    }
}

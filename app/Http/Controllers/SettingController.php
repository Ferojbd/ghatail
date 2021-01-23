<?php

namespace App\Http\Controllers;

use App\Models\Info;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    public function setting_page(){
        $ad_code = Info::where('group', 'general')->where('name', 'ad_code')->first();

        return view('backend.setting.setting_page', compact('ad_code'));
    }

    public function settingSubmit(Request $request){
        $request->validate([
            'ad_code' => 'required'
        ]);

        $info = Info::where('group', 'general')->where('name', 'ad_code')->first();
        if(!$info){
            $info = new Info;
            $info->group = 'general';
            $info->name = 'ad_code';
        }
        $info->value = $request->ad_code;
        $info->save();

        return redirect()->back()->with('msg', 'Ads updated successfully.');
    }
}

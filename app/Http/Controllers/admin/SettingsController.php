<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Cms;

class SettingsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function settingsEdit()
    {
        $settings = Setting::first();
        return view('admin.cms.settingsEdit', compact('settings'));
    }


    public function settingsUpdate(Request $request)
    { 
        $logo_name = $request->old_logo;
        $logo = $request->file('new_logo');
        if ($logo != '') {
            $logo_name = time().'.'.$logo->getClientOriginalExtension();
          
            $logo->move(public_path('images/settings/') , $logo_name);
        } 
        //fav icon
        $fav_icon_name = $request->old_fav_icon;
        $fav_icon = $request->file('new_fav_icon');
        if ($fav_icon != '') {
            $fav_icon_name = time().'.'.$fav_icon->getClientOriginalExtension();
          
            $fav_icon->move(public_path('images/settings/') , $fav_icon_name);
        } 
        $user = Setting::findOrFail($request->get('id'));
        $user->site_title = $request->get('site_title');
        $user->meta_key = $request->get('meta_key');
        $user->meta_description = $request->get('meta_description');
        $user->meta_title = $request->get('meta_title');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');
        $user->address = $request->get('address');
        $user->add_2 = $request->get('add_2');
        $user->add_3 = $request->get('add_3'); 
        $user->add_4 = $request->get('add_4');
        $user->instagram = $request->get('instagram');
        $user->twitter = $request->get('twitter');
        $user->facebook = $request->get('facebook');
        //For logo
        if ($request->old_logo != null) {
            if ($request->file('new_logo')) {
                $file = public_path('/images/settings/' . "/" . $request->old_logo);
                if (file_exists($file)) {
                    unlink($file);
                }
                $user->logo = $logo_name;
            }
        } else {
            $user->logo = $logo_name;
        }
        
        //for image
         if ($request->old_fav_icon != null) {
            if ($request->file('new_fav_icon')) {
                $file = public_path('/images/settings/' . "/" . $request->old_fav_icon);
                if (file_exists($file)) {
                    unlink($file);
                }
                $user->fav_icon = $fav_icon_name;
            }
        } else {
            $user->fav_icon = $fav_icon_name;
        }
        $user->updated_at = date('Y-m-d');
        $user->save();
        return redirect()->back()->with('success', __("Settings updated successfully"));
    }
    
    public function terms()
    {    
        $terms = Cms::first();
        return view('admin.cms.terms_condition',compact('terms'));
    }
    
    
    
    public function terms_update(Request $request)
    { 
        $terms = Cms::findOrFail($request->get('id'));
        $terms->terms_title = $request->get('terms_title');
        $terms->terms_description = $request->get('terms_description');
        $terms->updated_at = date('Y-m-d');
        $terms->save();
        return redirect()->back()->with('success', __("Updated successfully"));
    }
    
    public function privacy()
    {    
        $privacy = Cms::first();
        return view('admin.cms.privacy_policy',compact('privacy'));
    }
    
    public function privacy_update(Request $request)
    { 
        $privacy = Cms::findOrFail($request->get('id'));
        $privacy->privacy_title = $request->get('privacy_title');
        $privacy->privacy_description = $request->get('privacy_description');
        $privacy->updated_at = date('Y-m-d');
        $privacy->save();
        return redirect()->back()->with('success', __("Updated successfully"));
    }
    
    
}

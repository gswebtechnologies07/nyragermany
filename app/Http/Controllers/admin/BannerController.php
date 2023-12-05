<?php

namespace App\Http\Controllers\admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class BannerController extends Controller
{
    
    public function banner_list(){
        
        $banner = Banner::get();
        return view('admin.banner.banner_list', compact('banner'));
    }
    
    
     public function addBanner(){
        
        return view('admin.banner.add_banner');
    }

   
     public function storeBanner(Request $request)
    {   
         $imageName = "";
        if(request()->hasfile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/settings'), $imageName);
        } 
            
        $banner = new Banner([
            'image' =>  $imageName,
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $banner->save();
      
        return redirect()->route('banner-list')->with('success', __("New Banner Added successfully"));
    }
    
    
    
      public function banner_edit($id)
    {
        $banner = Banner::findorFail($id);
        return view('admin.banner.edit_banner',compact('banner'));
    }
    
    
    
      public function banner_update(Request $request)
    {
        
       $imageName = $request->old_image;
        $image = $request->file('new_image');
        if ($image != '') {
            $imageName = time().'.'.$image->getClientOriginalExtension();
          
            $image->move(public_path('images/settings/') , $imageName);
        } 
        
        
        $user = Banner::findOrFail($request->get('id'));
     
          ///For image
        if ($request->old_image != null) {
            if ($request->file('new_image')) {
                $file = public_path('/images/settings/' . "/" . $request->old_image);
                if (file_exists($file)) {
                    unlink($file);
                }
                $user->image = $imageName;
            }
        } else {
            $user->image = $imageName;
        }
       
        $user->updated_at = date('Y-m-d');
        $user->save();
        
         return redirect()->route('banner-list')->with('success', __("Banner updated successfully"));
    }
    

    
    public function delete($id)
    {
        $banner = Banner::where('id', $id)->first();
        $banner->delete();
        return redirect()->route('banner-list')->with('error', __("Banner Deleted successfully"));
    }
    
    
    public function banner_view()
    {    
         $banner = Banner::first();
         return view('admin.edit_banner',compact('banner'));
    }

    
    

   
}

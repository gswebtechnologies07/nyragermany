<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\SectionOne;
use App\Models\SectionTwo;
use App\Models\SectionThree;

class AboutController extends Controller
{
    
    public function about_edit()
    {
        $about = About::first();
        return view('admin.aboutUs.edit_about', compact('about'));
    }
    
    
      public function about_update(Request $request)
       {
        $user = About::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        $user->description = $request->get('description');
        $user->updated_at = date('Y-m-d');
        $user->save();
        
         return redirect()->back()->with('success', __("Updated successfully"));
    }
    
    
    //Section One
    public function section_one_edit()
    {
        $section_one = SectionOne::first();
        return view('admin.aboutUs.section_one_edit', compact('section_one'));
    }
    
    
     public function section_one_update(Request $request)
       {
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/about/') , $image_name);
             }
        }
        $image_two_name = $request->image_two_old;  
        if($request->image_two_new!=null){
             $image2 = $request->file('image_two_new');
             if ($image2 != '') {
                 $image_two_name = time().'.'.$image2->getClientOriginalExtension();
                 $image2->move(public_path('/images/about/') , $image_two_name);
             }
        }
        $user = SectionOne::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        $user->description = $request->get('description');
         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/about/' . "/" . $request->old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image = $image_name;
             }
         } else {
             $user->image = $image_name;
         }
          if ($request->image_two_old != null) {
             if ($request->file('image_two_new')) {
                $file = public_path('/images/about/' . "/" . $request->image_two_old);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image_two = $image_two_name;
             }
         } else {
             $user->image_two = $image_two_name;
         }
        $user->updated_at = date('Y-m-d');
        $user->save();
         return redirect()->back()->with('success', __("Updated successfully"));
    }
    
    
    //Section Two
   public function section_two_edit()
    {
        $section_two = SectionTwo::first();
        return view('admin.aboutUs.section_two', compact('section_two'));
    }
    
    
     public function section_two_update(Request $request)
       {
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/about/') , $image_name);
             }
        }
        $image_two_name = $request->image_two_old;
        if($request->image_two_new!=null){
             $image2 = $request->file('image_two_new');
             if ($image2 != '') {
                 $image_two_name = time().'.'.$image2->getClientOriginalExtension();
                 $image2->move(public_path('/images/about/') , $image_two_name);
             }
        }
        $user = SectionTwo::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        $user->description = $request->get('description');
         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/about/' . "/" . $request->old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image = $image_name;
             }
         } else {
             $user->image = $image_name;
         }
          if ($request->image_two_old != null) {
             if ($request->file('image_two_new')) {
                $file = public_path('/images/about/' . "/" . $request->image_two_old);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image_two = $image_two_name;
             }
         } else {
             $user->image_two = $image_two_name;
         }
        $user->updated_at = date('Y-m-d');
        $user->save();
         return redirect()->back()->with('success', __("Updated successfully"));
    }
    
   //Section Three
   public function section_three_edit()
    {
        $section_three = SectionThree::first();
        return view('admin.aboutUs.section_three', compact('section_three'));
    }
    
    
     public function section_three_update(Request $request)
       {
         $image_name = $request->old_image;
        if($request->new_image!=null){
             $image = $request->file('new_image');
             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/about/') , $image_name);
             }
        }
        $image_two_name = $request->image_two_old;  
        if($request->image_two_new!=null){
             $image2 = $request->file('image_two_new');
             if ($image2 != '') {
                 $image_two_name = time().'.'.$image2->getClientOriginalExtension();
                 $image2->move(public_path('/images/about/') , $image_two_name);
             }
        }
        $user = SectionThree::findOrFail($request->get('id'));
        $user->title = $request->get('title');
        $user->description = $request->get('description');
         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/about/' . "/" . $request->old_image);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image = $image_name;
             }
         } else {
             $user->image = $image_name;
         }
          if ($request->image_two_old != null) {
             if ($request->file('image_two_new')) {
                $file = public_path('/images/about/' . "/" . $request->image_two_old);
                 if (file_exists($file)) {
                     unlink($file);
                 }
                 $user->image_two = $image_two_name;
             }
         } else {
             $user->image_two = $image_two_name;
         }
        $user->updated_at = date('Y-m-d');
        $user->save();
         return redirect()->back()->with('success', __("Updated successfully"));
    }
    
  
}

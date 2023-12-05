<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Feature;

class FeatureController extends Controller
{  
    
     public function list()
    {    
        $features = Feature::get();
        return view('admin.feature.list',compact('features'));
    }
    
    
     public function add()
    {    
        return view('admin.feature.add');
    }

    
    public function store(Request $request)
    {   
        $imageName = "";
        if(request()->hasfile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/features'), $imageName);
        } 
       
        $features = new Feature([
            'name' =>  $request->get('name'),
             'image' =>  $imageName,
             'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $features->save();
      
        return redirect()->route('feature-list')->with('success', __("Added successfully"));
    }
    
    
     public function edit($id)
    {
        $features = Feature::findorFail($id);
        return view('admin.feature.edit', compact('features'));
    }
    
    
    
    public function update(Request $request)
      {
        $imageName = $request->old_image;
        $image = $request->file('new_image');
        if ($image != '') {
            $imageName = time().'.'.$image->getClientOriginalExtension();
          
            $image->move(public_path('images/features/') , $imageName);
        } 
        $features = Feature::findOrFail($request->get('id'));
        $features->name = $request->get('name');
        $features->updated_at = date('Y-m-d');
          ///For image
        if ($request->old_image != null) {
            if ($request->file('new_image')) {
                $file = public_path('/images/features/' . "/" . $request->old_image);
                if (file_exists($file)) {
                    unlink($file);
                }
                $features->image = $imageName;
            }
        } else {
            $features->image = $imageName;
        }
        
        $features->save();
         return redirect()->route('feature-list')->with('success', __("Updated successfully"));
    }
    
    
    public function delete($id)
    {
        $features = Feature::where('id', $id)->first();
        $features->delete();
        return redirect()->route('feature-list')->with('success', __("Deleted Successfully"));
    }
}

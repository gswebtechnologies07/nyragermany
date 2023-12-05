<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Colour;

class ColourController extends Controller
{  
    
     public function list()
    {    
        $colours = Colour::get();
        return view('admin.colour.list',compact('colours'));
    }
    
    
     public function add()
    {    
        return view('admin.colour.add');
    }

    
    public function store(Request $request)
    {   
       
        $colours = new Colour([
            'colour_code' =>  $request->get('colour_code'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        $colours->save();
      
        return redirect()->route('colour-list')->with('success', __("Added successfully"));
    }
    
    
     public function edit($id)
    {
        $colours = Colour::findorFail($id);
        return view('admin.colour.edit', compact('colours'));
    }
    
    
    
    public function update(Request $request)
      {
        
       
        $colours = Colour::findOrFail($request->get('id'));
        $colours->colour_code = $request->get('colour_code');
        $colours->updated_at = date('Y-m-d');
        $colours->save();
         return redirect()->route('colour-list')->with('success', __("Updated successfully"));
    }
    
    
    public function delete($id)
    {
        $colours = Colour::where('id', $id)->first();
        $colours->delete();
        return redirect()->route('colour-list')->with('success', __("Deleted Successfully"));
    }
}

<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\URL;
use Intervention\Image\Facades\Image;
use Illuminate\Validation\Rules;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
  
    public function reset_password()
    {
        return view('admin.profile.reset_password');
    }


     public function password_update(Request $request)
    {
        $this->validate($request,[
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
            'password_confirmation' => ['required'],
            ]);
        $user = User::findOrFail($request->get('id'));
        $user->password = Hash::make($request->password);
        $user->updated_at = date('Y-m-d');
        
        $user->save();
        return redirect()->route('reset-password')->with('success', __("Password updated successfully"));
    }
    
    
     public function admin_profile($id)
    {   
         $user = User::findorFail($id);
        return view('admin.profile.profile',compact('user'));
    }
    
   
     public function admin_profile_update(Request $request)
    {
       
        $image_name = $request->old_image;
        $image = $request->file('new_image');
        if ($image != '') {
            $image_name = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('images/users/') , $image_name);
            
          
        } else {
                $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required',
                'phone' => 'required|max:11',
            ]);
        }
        
       
        $user = User::findOrFail($request->get('id'));
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->phone = $request->get('phone');

        if ($request->old_image != null) {
            if ($request->file('new_image')) {
                $file = public_path('/images/users/' . "/" . $request->old_image);
                if (file_exists($file)) {
                    unlink($file);
                }
                $user->image = $image_name;
            }
        } else {
            $user->image = $image_name;
        }

        $user->updated_at = date('Y-m-d');
        $user->save();
        
        return redirect()->back()->with('success', __("Profile updated successfully"));
    }
    
    
    
    
    
    
    
    
    
    
}
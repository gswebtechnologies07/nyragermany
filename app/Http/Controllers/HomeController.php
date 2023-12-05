<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;
use Auth;
use App\Models\Banner;
use App\Models\About;
use App\Models\Enquiry;
use App\Models\Gallery;
use App\Models\Blog;
use App\Models\Product;
use App\Models\Cms;
use App\Models\Slider;
use App\Models\SectionOne;
use App\Models\SectionTwo;
use App\Models\SectionThree;

class HomeController extends Controller
{
  
    public function index()
    {   
        $products = Product::limit(4)->get();
        $banner = Banner::get();
        $sliders = Slider::get();
        $about = About::get();
        return view('index', compact('products','banner','sliders','about'));
    }
    
    
	 public function about_us()
	 {   
	     $about = About::get();
	     $section_one = SectionOne::get();
	     $section_two = SectionTwo::get();
	     $section_three = SectionThree::get();
	     return view('about_us', compact('about','section_one','section_two','section_three'));
	 }


    
     public function contact_us()
	 {   
	     $contacts = Enquiry::get();
	     return view('contact_us',compact('contacts'));
	 }
	 
	 
	 public function blogs()
	 {   
		$blogs = Blog::get();
	     return view('blogs',compact('blogs'));
	 }
     

	 public function blog_details($slug)
	 {   
		$blogs = Blog::orderBy('created_at', 'desc')->get();
		$blog_details = Blog::where('slug', $slug)->first();
	    return view('blog_details',compact('blog_details','blogs'));
	 }
	 
	 
// 	public function product_details($slug)
// 	 {   
// 		$products = Product::orderBy('created_at', 'desc')->get();
// 		$product_details = Product::where('slug', $slug)->first();
// 	    return view('product_details',compact('product_details','products'));
// 	 }
    
    
     public function termsAndCondition()
	 {   
	     $terms= Cms::first();
	     return view('terms_condition',compact('terms'));
	 }
	 
	 public function privacy_policy()
	 {   
	     $privacy = Cms::first();
	     return view('privacy_policy',compact('privacy'));
	 }
    
}

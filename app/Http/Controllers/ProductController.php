<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductEnquiry;
use App\Models\Feature;
use App\Models\Colour;
use Mail;
class ProductController extends Controller
{
   
    public function getProduct($id)
    {  
		$products = Product::where('id',  $id)->first();
		$feature = Feature::get();
		$color = Colour::get();
		
		return view('product_details',compact('products','feature','color'));
    }
    
    public function all_products(Request $request)
    {   
        $products = Product::get();
        $categories = Category::get();
        return view('products',compact('products','categories'));
    }
}

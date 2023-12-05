<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsContent;
use App\Models\Setting;
use App\Models\Product;
use App\Models\Colour;
use App\Models\Feature;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
     public function productList()
    {    
        $products = Product::get();
        return view('admin.product.product_list', compact('products'));
    }
    
      public function addProduct()
    {    
        $categroies = Colour::get();
        $colors = Colour::get();
        $feature = Feature::get();
        // dd($feature);
        return view('admin.product.add_product',compact('categroies','colors','feature'));
    }
    
     public function store_product(Request $request)
    {   
        
         $request->validate([
            'product_name' => 'required',
            'description' => 'required',
        ]);
            
        $imageName = "";
        if(request()->hasfile('image')){
            $imageName = time().'.'.request()->image->getClientOriginalExtension();
            request()->image->move(public_path('images/products'), $imageName);
        } 
        if($request->color){
            $colors = $request->color;
            $colors = implode(',',$colors);
        } else{
            $colors='';
        }
        if($request->feature){
            $feature = $request->feature;
            $feature = implode(',',$feature);
        } else{
            $feature='';
        }
        
        $products = new Product([
            'product_name' =>  $request->get('product_name'),
            'sub_title' =>   $request->get('sub_title'),
            'description' =>   $request->get('description'),
            'color' =>  $colors,
            'feature'=> $feature,
            'image' =>  $imageName,
            'status' =>   'enable',
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        // dd($products);
        $products->save();
        return redirect()->route('product-list')->with('success', __("Product Added Successfully"));
    }
    
    
    
    public function edit_product($id)
    {   
        $categroies = Colour::get();
        $products = Product::findorFail($id);
        $colors = Colour::get();
        $feature = Feature::get();
        // dd($feature);
        return view('admin.product.edit_product',compact('products','categroies','colors','feature'));
    }
    
    
     public function update_product(Request $request)
    {
        
        $request->validate([
            'product_name' => 'required',
            'title' => 'required',
            'description' => 'required',
        ]);
        
        $imageName = $request->old_image;
        $image = $request->file('new_image');
        if ($image != '') {
            $imageName = time().'.'.$image->getClientOriginalExtension();
          
            $image->move(public_path('images/products/') , $imageName);
        } 
        
        $products = Product::findOrFail($request->get('id'));
        $products->product_name = $request->get('product_name');
        $products->category = $request->get('category');
        $products->title = $request->get('title');
        $products->description = $request->get('description');
        $products->show_in_footer = $request->get('show_in_footer');
        
         ///For image
        if ($request->old_image != null) {
            if ($request->file('new_image')) {
                $file = public_path('/images/products/' . "/" . $request->old_image);
                if (file_exists($file)) {
                    unlink($file);
                }
                $products->image = $imageName;
            }
        } else {
            $products->image = $imageName;
        }
        
        $products->updated_at = date('Y-m-d');
        $products->save();
        
         return redirect()->route('product-list')->with('success', __("Product updated successfully"));
    }
    
    
    
    public function updateProductStatus(Request $request)
    {
        Product::where('id',$request->id)->update([
            'status'=>($request->status)
        ]);
        
        if($request->status=='enable'){
            $message= __("Status Enabled");
        }
        if($request->status=='disable'){
            $message= __("Status Disabled");
        }
        return ['message'=>$message];
    }
    
    
     public function delete($id)
    {
        $products = Product::where('id', $id)->first();
        $products->delete();
        return redirect()->route('product-list')->with('success', __("Product Deleted Successfully"));
    }
    
    
    public function getPage($id)
    {
		$products = Product::where('page_name', 'like', $id)->first();
		if(null === $cmsContent = CmsContent::getContentByPageId($cms->id))
		{
			echo 'No Content';exit;
		}
		return view('products');

    }
    
}

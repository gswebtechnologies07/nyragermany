<?php
namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

use App\Models\Blog;

use App\Models\Category;



class BlogController extends Controller
{  

    public function blog_list()
    {    
        $blog = Blog::get();

        return view('admin.blog.blog_list', compact('blog'));

    }
  
    public function add_blog()
    {    
        $categories = Category::get();

        return view('admin.blog.add_blog',compact('categories'));

    }


     public function store_blog(Request $request)
    {   

         $imageName = "";

        if(request()->hasfile('image')){

            $imageName = time().'.'.request()->image->getClientOriginalExtension();

            request()->image->move(public_path('/images/blogs/'), $imageName);
        }    

        $blog = new Blog([

            'category' =>  $request->get('category'),

            'title' =>  $request->get('title'),

            'content' =>  $request->get('content'),

            'tags' =>  $request->get('tags'),

            'added_by' =>  $request->get('added_by'),

            'is_active' =>  $request->get('is_active'),

            'is_featured' =>  $request->get('is_featured'),

            'image' =>  $imageName,

            'status' => 'enable',

            'created_at' => date('Y-m-d'),

            'updated_at' => date('Y-m-d'),

        ]);
        $blog->save();    
        return redirect()->route('blog-list')->with('success', __("New Blog Added successfully"));

    }

    

     public function edit_blog($id)
    {    

        $categories = Category::get();

        $blog = Blog::findorFail($id);

        return view('admin.blog.edit_blog', compact('blog','categories'));

    }


    public function update_blogs(Request $request)
      {
         $image_name = $request->old_image;

        if($request->new_image!=null){

             $image = $request->file('new_image');

             if ($image != '') {
                 $image_name = time().'.'.$image->getClientOriginalExtension();
                 $image->move(public_path('/images/blogs/') , $image_name);

             }

        }
        $blog = Blog::findOrFail($request->get('id'));
        $blog->title = $request->get('title');
        $blog->content = $request->get('content');
        $blog->tags = $request->get('tags');
        $blog->added_by = $request->get('added_by');
        $blog->is_active = $request->get('is_active');
        $blog->is_featured = $request->get('is_featured');
         if ($request->old_image != null) {
             if ($request->file('new_image')) {
                $file = public_path('/images/blogs/' . "/" . $request->old_image);
                 if (file_exists($file)) {

                     unlink($file);

                 }
                 $blog->image = $image_name;
             }

         } else {

             $blog->image = $image_name;
         }

        $blog->updated_at = date('Y-m-d');
        $blog->save();
         return redirect()->route('blog-list')->with('success', __("Updated successfully"));

    }

  

     public function updateBlogStatus(Request $request)
    {

        Blog::where('id',$request->id)->update([

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
        $blog = Blog::where('id', $id)->first();

        $blog->delete();

        return redirect()->route('blog-list')->with('success', __("Blog Deleted Successfully"));

    }

   

}


<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CmsContent;
use App\Models\Setting;
use App\Models\Cms;

class CmsController extends Controller
{
   
    public function getPage($slug)

    {
		$cms = Cms::where('slug',  $slug)->first();
		return view('cms_page',compact('cms'));
    }
    
}

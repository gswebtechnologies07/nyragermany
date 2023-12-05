<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;


class IndexController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {    
        $total_enquiry =  Enquiry::count();
        if(auth()->user()->user_type=='admin'){
            return view('admin.dashboard',compact('total_enquiry'));
        }else{
            return view('index');
        }        
    }

}
<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactDetails;
use App\Models\Enquiry;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    
     public function contact_details_list()
    {   
        $contact_details = ContactDetails::orderBy('id','desc')->get();
        return view('admin.contacts.contact_list', compact('contact_details'));
    }
    


    
     public function edit_contact_details($id)
    {
        $contact_details = ContactDetails::findorFail($id);
        return view('admin.contacts.edit_contact',compact('contact_details'));
    }
    
    
     
      public function update_contact_details(Request $request)
    {
        
         $request->validate([
            'address' => 'required',
            'phone' => 'required',
            'operating_hours' => 'required',
        ]);
        
        $contact_details = ContactDetails::findOrFail($request->get('id'));
        $contact_details->address = $request->get('address');
        $contact_details->phone = $request->get('phone');
        $contact_details->operating_hours = $request->get('operating_hours');
       
        $contact_details->updated_at = date('Y-m-d');
        $contact_details->save();
        
         return redirect()->route('contact-list')->with('success', __("Contact Deatils updated successfully"));
    }
    
    
    
    //Enqury list
    public function enquiry_list()
    {
        $enquiry = Enquiry::orderBy('created_at','desc')->get();
        return view('admin.contacts.enquiry_list', compact('enquiry'));
    }
    
    
    
    public function enquiry_modal($id)
    {  
        $enquiry_modal = Enquiry::findorFail($id);
        $enquiry_modal_data = Enquiry::where('id', '=', $id)->first();
        return view('admin.enquiry_list', compact('enquiry_modal', 'enquiry_modal_data'));
    }
    
    public function modal_data(Request $request)
    {    
        $output = '';
        $modal_data = Enquiry::where('id', '=', $request->id)->first();
        $output = '<div class="new_message">
                    			<div class="row">
                    				<div class="col-lg-4">
                    					<p class="blod_one">Name</p>
                    				</div>
                    				<div class="col-lg-8 ">	
                    					<p>'.$modal_data->name.'</p>
                    				</div>
                    			</div>
                    			
                    			<div class="row">
                    				<div class="col-lg-4">
                    					<p class="blod_one">Email</p>
                    				</div>
                    				<div class="col-lg-8 ">	
                    					<p>'.$modal_data->email.'</p>
                    				</div>
                    			</div>
                    			<div class="row">
                    				<div class="col-lg-4">
                    					<p class="blod_one">Phone</p>
                    				</div>
                    				<div class="col-lg-8 ">	
                    					<p>'.$modal_data->phone.'</p>
                    				</div>
                    			</div>
                    			<div class="row">
                    				<div class="col-lg-4">
                    					<p class="blod_one">Question</p>
                    				</div>
                    				<div class="col-lg-8 ">	
                    					<p>'.$modal_data->question.'</p>
                    				</div>
                    			</div>
                            </div>';
            
        
		
	   // $data = array('table_data'  => $output,);

        echo json_encode($output);
        
        // return view('admin.enquiry_list', comapct('modal_data'));
    }
    
    
    //Delete
     public function delete($id)
    {
        $contact_details = ContactDetails::where('id', $id)->first();
        $contact_details->delete();
        return redirect()->route('contact-details-list')->with('error', __("public.Unblocked"));
    }
    

}
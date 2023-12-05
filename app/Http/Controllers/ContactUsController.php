<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Enquiry;
use App\Models\Setting;
use Mail;


class ContactUsController extends Controller
{
   
     public function storeContacts(Request $request)
    {   
        
        $request->validate( [
            'name' => ['required', 'string'],
            'email' => ['required','email'],
            'subject' => ['required'],
            'message' => ['required'],
        ]);
        $contacts = new Enquiry([
            'name' =>  $request->get('name'),
            'email' =>  $request->get('email'),
            'subject' =>  $request->get('subject'),
            'message' =>  $request->get('message'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
        ]);
        
        $contacts->save();
        if($contacts){
            $name  = $request->name; 
            $email   = $request->email;
            $subject  = $request->subject;
            $msg  = $request->message;
            $toemail = get_setting('email');
            $today   = date("Y-m-d H:i");
        
         $data = array('name'=>$name, 'email'=>$email, 'subject'=>$subject, 'msg'=>$msg,'toemail'=>$toemail);
         
          Mail::send('enquiryEmail', $data, function ($message) use ($data)
            {
                $message->subject('Enquiry');
                $message->from('nyrainterior@gmail.com');
                $message->to($data['toemail']);
            });
        return redirect()->route('contact#scroll')->with('success', __("Thank you for contacting us! We will get in touch with you shortly"));
        } else {
             return redirect()->back()->with('error', __("Something is "));
        }
    }
    
   

}

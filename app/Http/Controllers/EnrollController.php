<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\Enroll;
use App\Models\Setting;
use Auth;
use Mail;


class EnrollController extends Controller
{
  
    public function add_enroll(Request $request) {   
      
      
        $request->validate([
           'name' => ['required', 'string'],
            'email' => ['required','email'],
            'phone' => ['required','max:13'],
            'programs' => ['required'],
            'question' => ['required'],
        ]);
        
        try{
            $name  = $request->name; 
            $email   = $request->email;
            $phone  = $request->phone;
            $programs  = $request->programs;
            $question  = $request->question;
            $toemail = get_setting('email');
            $today   = date("Y-m-d H:i");
            
            $data    = array('name'=>$name, 'email'=>$email, 'phone'=>$phone, 'question'=>$question, 'programs'=>$programs, 'toemail'=>$toemail);
            
            Mail::send('enrollEmail', $data, function ($message) use ($data)
            {
                $message->subject('Enroll');
                $message->from('globaltruck@gmail.com');
                $message->to($data['toemail']);
            });
            
            $enrolls = new Enroll([
            'name' =>  $request->get('name'),
            'email' =>  $request->get('email'),
            'phone' =>  $request->get('phone'),
            'programs' =>  $request->get('programs'),
            'question' =>  $request->get('question'),
            'created_at' => date('Y-m-d'),
            'updated_at' => date('Y-m-d'),
             ]);
            
            $enrolls->save();
            return true;
        } catch (\Exception $e) {
            dd("Error", $e);
            return false; 
        }    
              
    }
   
    
}

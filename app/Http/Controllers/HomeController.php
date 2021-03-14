<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\Contact; 
use Mail; 

class HomeController extends Controller
{
   

    public function index()
    {
        $setting = Setting::all();
        return view('welcome', compact('setting'));
    }

    public function approval()
    {
        return view('users.approval');
    }

    public function getContact() { 

        return view('contact-us'); 
      } 
 
       public function saveContact(Request $request) { 
 
         $this->validate($request, [
             'name' => 'required',
             'email' => 'required|email',
             'subject' => 'required',
             'phone_number' => 'required|numeric',
             'message' => 'required'
         ]);
 
         $contact = new Contact;
 
         $contact->name = $request->name;
         $contact->email = $request->email;
         $contact->subject = $request->subject;
         $contact->phone_number = $request->phone_number;
         $contact->message = $request->message;
 
         $contact->save();
         
         return back()->with('success', 'Thank you for contact us!');
 
     }

}
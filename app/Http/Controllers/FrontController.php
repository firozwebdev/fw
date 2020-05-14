<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class FrontController extends Controller
{
    public function home(){
        return view('front-pages.home');
    }
    
    public function about(){
        return view('front-pages.about');
    }

    public function services(){
        return view('front-pages.services');
    }

    public function hacker_shop(){
        return view('front-pages.hacker-shop');
    }

    public function mobile_spy(){
        return view('front-pages.mobile-spy');
    }
    
    public function faq(){
        return view('front-pages.faq');
    }
    
    public function contact(){
        return view('front-pages.contact');
    }

   

    
    

    public function sendMessage(Request $request){
        
        try{
            $message = [
                'first_name.required' => 'Name is required',
                'first_name.max' => 'Name is too long',
                'last_name.required' => 'Name is required',
                'last_name.max' => 'Name is too long',
                'email.required' => 'Email is required',
                'email.email' => 'Email is not valid',
                'country.required' => 'Subject is required',
                'services.required' => 'Services is required',
                'message.required' => 'Message is required',
                
            ];
            $rules = [
               
                'first_name' => 'required | max:100',
                'last_name' => 'required | max:100',
                'email' => 'required|email',
                'country' => 'required',
                'services' => 'required',
                'message' => 'required',
               
            ];

            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

            $contact = new Contact();
            $contact->first_name = $request->first_name;
            $contact->last_name = $request->last_name;
            $contact->email = $request->email;
            $contact->country = $request->country;
            $contact->services = json_encode($request->services);
            $contact->message = $request->message;
            $contact->save();
        
           //Contact::create($request->all());
           
          // alert()->success('Your message was sent');
          toast('Your message was sent','success')->autoClose(5000);

           return redirect()->back();

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}

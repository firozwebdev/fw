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
                'name.required' => 'Name is required',
                'name.max' => 'Name is too long',
                'email.required' => 'Email is required',
                'email.email' => 'Email is not valid',
                'subject.required' => 'Subject is required',
                'subject.max' => 'Subject is too long',
                'details.required' => 'Details is required',
                'details.max' => 'Details is too long',
                'message.required' => 'Message is required',
                
            ];
            $rules = [
               
                'name' => 'required | max:100',
                'email' => 'required|email',
                'subject' => 'required|max:255',
                'details' => 'required|max:255',
                'message' => 'required',
               
            ];

            $validator = Validator::make($request->all(), $rules, $message);
            if ($validator->fails()) {
                return redirect()->back()->withInput()->withErrors($validator);
            }

          
           Contact::create($request->all());
           
          // alert()->success('Your message was sent');
          toast('Your message was sent','success')->autoClose(5000);

           return redirect()->back();

        }catch(\Exception $e){
            return $e->getMessage();
        }
    }
}

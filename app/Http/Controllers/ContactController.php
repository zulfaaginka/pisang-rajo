<?php

namespace App\Http\Controllers;

USE Mail;
use Session;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function getContact(){
        return view('blog/contact');
    }

    public function postContact(Request $request){
        $this->validate($request,[
            'email' => 'required|email',
            'message' => 'required',
            'name' => 'required',
            'g-recaptcha-response' => 'required',
        ]);

        $data = array(
            'email' => $request->email,
            'name' => $request->name,
            'bodyMessage' => $request->message,
        );
        
        Mail::send('blog/mail',$data,function($message) use ($data){
            $message->from($data['email'],$data['name']);
            $message->to('pnrajo@gmail.com','Pisang Rajo');
            $message->subject('New Contact From Guest');
        });

        Session::flash('success','Message Sent!');

        return redirect('/contact');

    }
}

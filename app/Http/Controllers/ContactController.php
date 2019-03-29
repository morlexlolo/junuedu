<?php

namespace App\Http\Controllers;
use App\Subject;
use Illuminate\Http\Request;
use App\Contact;
use Illuminate\Support\Facades\Session;
use Mail;
class ContactController extends Controller
{
    public function index()
    {
        $subjects= Subject::get();
        return view('contact',compact('subjects'));
    }

     public function store(Request $request)
     {
            $this->validate($request, [
            'name' => 'required',
            'phone' => 'required|numeric|phone' ,
            'email' => 'required|email',
            'message' => 'required|min:5'
            ]);
            Contact::create($request->all());
            Mail::send('mail',
                    array(
                        'name' => $request->get('name'),
                        'email' => $request->get('email'),
                        'phone' => $request->get('phone'),
                        'user_message' => $request->get('message')
                    ), function($message)
                {
                $message->from('stephenvicson@gmail.com');
                $message->to('stephenvicson@gmail.com', 'Admin')->subject('Contact information from your website');
   });

            Session::flash('success','thanks for contacting us!');

            return redirect()->back();

     }

}

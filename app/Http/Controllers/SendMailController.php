<?php

namespace App\Http\Controllers;
use Mail;
use App\Rent;
use App\Mail\SendMailable;
use Illuminate\Http\Request;

class SendMailController extends Controller
{
    public function index($id)
    {
        if (Auth::check()) {
         $rent=Rent::find($id);
        
        return view('backend.mail.send_mail',compact('rent'));
      }
       return redirect('/login');
       
    }
    }
}

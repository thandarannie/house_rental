<?php

namespace App\Http\Controllers;
use App\Mail\SendMailable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index($email)
    {
        Mail::to($email)->send(new SendMailable());
        return redirect()->route('rentlists.index')
                         ->with('status','Email Successfully Send');
    }

}

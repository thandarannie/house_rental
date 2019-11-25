<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth',['except'=>['index']]);
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function admin()
    {
        if (Auth::user()->hasRole('admin')) {
            return view('backend.index');
        } else {
            return redirect()->route('home');
        }
    }
    public function index()
    {
        return view('frontend.index');
    }

    /*public function mail()
{
   $name = 'Krunal';
   Mail::to('thandarannie12@gmail.com')->send(new SendMailable($name));
   
   return 'Email was sent';
}*/
}

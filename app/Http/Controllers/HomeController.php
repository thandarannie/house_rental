<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Rent;
use App\User;
use App\House;
use App\Township;

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
        $total_projects =Rent::where('status',0)->count();

        $total_users = User::count();

        $total_houses = House::count();

        $total_rent_houses=House::where('status',1)->count();

        $total_ava_houses=House::where('status',0)->count();

        $total_township=Township::count();

        if (Auth::user()->hasRole('admin')) {
            return view('backend.index')->with(['total'=>$total_projects])->with('totalusers', $total_users)->with(['totalhouse'=>$total_houses])->with('total_rent_houses', $total_rent_houses)->with('total_ava_houses', $total_ava_houses)->with('total_township', $total_township);
        } else {
            return redirect()->route('home');
        }
    }

    /*public function totalprojects()
        {
            $total_projects = Rent::count();
            return view('summarys.summary')->with(['total'=>$total_projects]);
        }*/
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

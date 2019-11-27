<?php

namespace App\Http\Controllers;
use App\Mail\SendMailable;
use App\Mail\CancelMailable;
use Illuminate\Http\Request;
use App\House;
use App\Rent;
use Illuminate\Support\Facades\Mail;

class EmailController extends Controller
{
    public function index($email,$house_id,$rent_id)
    {
        $house = House::find($house_id);
        $house->status = 1;
        $house->save();

        $rent=Rent::find($rent_id);
        $rent->status=1;
        $rent->save();

        Mail::to($email)->send(new SendMailable());

        return redirect()->route('rentlists.index')
        ->with('status','Email Successfully Send');
    }
    public function cancelemail($email,$rent_id)
    {
        $rent=Rent::find($rent_id);
        $rent->delete();

        Mail::to($email)->send(new CancelMailable());

        return redirect()->route('rentlists.index')
        ->with('status','Email Successfully Send');
    }
    

}

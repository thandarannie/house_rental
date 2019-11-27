<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Rent;
use App\House;
use Illuminate\Support\Facades\Auth;

class RentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      /*  $rents=Rent::all();*/
        /*return view('frontend/owner.index');*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        /*$houses=House::all();
        return view('')*/
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request ->validate([
                "from" =>'required|min:5',
                "to" =>'required',
                "address" =>'required',
                "phone" =>'required',
                "message" =>'required',
                 

            ]);
            $rent=new Rent();
            $rent->user_id = Auth::id();
            $rent->house_id = request('house');
            $rent->from = request('from');
            $rent->to = request('to');
            $rent->address = request('address');
            $rent->phone = request('phone');
            $rent->message = request('message');
            $rent->save();
        //redirect

            return redirect()-> route('owner.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $house=House::find($id);
        return view('frontend/owner.rent',compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

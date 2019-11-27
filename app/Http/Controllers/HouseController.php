<?php

namespace App\Http\Controllers;
use App\House;
use App\Rent;

use Illuminate\Http\Request;

class HouseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/

    public function index()
    {
        $houses = House::all();
        $renthouses=House::all()->where('status','=',1);
        $avaliablehouses=House::all()->where('status','=',0);
        return view('backend.housedetails',compact('houses','renthouses','avaliablehouses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //Validation
        //File Upload if file exist
        //Store Data
        $house = new House;
        $house->user_id= request('name'); 
        $house->township_id = request('township');
        $house->type_id = request('type');
        $house->title = request('title');
        $house->area= request('area'); 
        $house->price = request('price');
        $house->room = request('room');
        $house->location= request('location'); 
        $house->image = request('image');
        $house->phone = request('phone');
        $house->status = request('status');
        $house->description = request('des');
        $house->save();
        return redirect()->route('create.index');
        //Redirect
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    public function delete($id)
    {
        $house=House::find($id);
        $house->delete();

        $rent=Rent::where('house_id',$id);
        $rent->delete();
         return redirect()->route('housedetails.index');
        
    }
    public function destroy($id)
    {
        //
    }
}

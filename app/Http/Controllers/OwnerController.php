<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $houses=House::all();
        return view('frontend/owner.index',compact('houses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $houses=House::all();
        return view('frontend/owner.create',compact('houses'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);


        if ($request-> hasfile('image')) {
            foreach ($request->file('image') as $image) {

                $name=$image->getClientOriginalName();
                $image->move(public_path().'/storage/image/',$name);
                $data[]=$name;
            }
                
            }
            //dd($photo);

            $house=new House();
            $house->title = request('title');
            $house->user_id = request('title');
            $house->township_id = request('title');
            $house->type_id = request('title');
            $house->title = request('title');
            $house->area = request('area');
            $house->price = request('price');
            $house->room = request('room');
            $house->street= request('street');
            $house->hno = request('no');
            $house->image = json_encode($data);
            $house->phone= request('phone');
            $house->description= request('desc');
            $house->save();
            //dd($house);


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
        $houses =House::find($id);
        //dd($post);
        return view('frontend/owner.detail',compact('houses'));
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

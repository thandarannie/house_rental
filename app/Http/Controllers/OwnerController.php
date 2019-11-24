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
        $request ->validate([
                "image" => 'required',
                'image.*'=>'image|mimes:jpeg,png,jpg'
                
                

            ]);


        if ($request-> hasfile('image')) {
                $photo=$request->file('image');
                $name=time().'.'.$photo->getClientOriginalExtension();
                $photo->move(public_path().'/storage/image/',$name);
                $photo='storage/image/'.$name;
            }else{
                $photo='';
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
            $house->image = $photo;
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
        $house=House::find($id);
        return view('frontend/owner.detail',compact('house'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $house=House::find($id);
    
        return view('frontend/owner.edit',compact('house'));
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
        if($request->hasfile('image')){
            $photo =$request->file('image');
            $name=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path().'/storage/image/',$name);
            $photo='/storage/image/'.$name;
        }
        else{
            $photo='';
        }


        $house = House::find($id);
        $house->user_id= request('title'); 
        $house->township_id = request('title');
        $house->type_id = request('title');
        $house->title = request('title');
        $house->area= request('area'); 
        $house->price = request('price');
        $house->room = request('room');
        $house->location= request('location'); 
        $house->image = $photo;
        $house->phone = request('phone');
        //$house->status = request('title');
        $house->description = request('desc');
        //dd($house);
        $house->save();

        return redirect()->route('owner.show',$id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   

        $house=House::find($id);
        $house->delete();
        return redirect()->route('owner.index');
    }
}

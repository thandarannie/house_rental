<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;
use Illuminate\Support\Facades\Auth;
use Image;
class OwnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $houses=House::where('status', 0)->get();
        return view('frontend.owner.index',compact('houses'));
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
        $request ->validate([
                "title" =>'required|min:5',
                "area" =>'required',
                "price" =>'required',
                "room" =>'required',
                "st" =>'required',
                "hno" =>'required',
                "image" =>'required|mimes:jpeg,png,jpg',
                "phone" =>'required|min:11',
                "desc" =>'required',
                
            ]);
            if ($request->image) {
            $file_name = time() . '.' . $request->image->getClientOriginalExtension();
            $file_path = '/storage/image/' . $file_name;
            $image = Image::make($request->image)->save(public_path($file_path));
            }

            $house=new House();
            $house->user_id =Auth::id();
            $house->township_id = request('township');
            $house->type_id = request('type');
            $house->title = request('title');
            $house->area = request('area');
            $house->price = request('price');
            $house->room = request('room');
            $house->street= request('st');
            $house->hno = request('hno');
            $house->image = $file_path;
            $house->phone= request('phone');
            $house->description= request('desc');
            $house->save();
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
            $photo='oldimg';
        }

        $house = House::find($id);

        $house->user_id=Auth::id(); 
        $house->township_id = request('township');
        $house->type_id = request('type');
        $house->title = request('title');
        $house->area= request('area'); 
        $house->price = request('price');
        $house->room = request('room');
        $house->street= request('st');
        $house->hno= request('hno'); 
        $house->image = $photo;
        $house->phone = request('phone');
        //$house->status = request('title');
        $house->description = request('desc');
        //dd($house);
        $house->save();

        return redirect()->route('owner.show',$id);
    }

    public function ownerlists()
    {
        $houses = House::all();
        $renthouses=House::all()->where('status','=',1);
        $avaliablehouses=House::all()->where('status','=',0);
        return view('backend.ownerlists',compact('houses','renthouses','avaliablehouses'));
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

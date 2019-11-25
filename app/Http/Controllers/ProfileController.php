<?php

namespace App\Http\Controllers;
use App\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
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
        $profile=User::find($id);
        return view('frontend/profile/edit',compact('profile'));
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
        $request->validate(
        [
            'profile'=>'sometimes|mimes:jpg,jpeg,png',
            'name'=>'required|min:5',
            'email'=>'required|email'


        ]);

        //upload
        if($request->hasfile('profile'))
        {
            $photo=$request->file('profile');
            $name=time().'.'.$photo->getClientOriginalExtension();
            $photo->move(public_path(),$name);
            $photoname=$name;
        }
        else
        {
            $photoname=request('oldprofile');
        }

        //update data
        $profile=User::find($id);
        $profile->name=request('name');
        $profile->email=request('email');
        $profile->image=$photoname;

        $profile->save();

        //Redirect
       return redirect()->route('owner.index');
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

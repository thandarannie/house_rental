<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Township;

class TownshipController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $township = Township::all();
         return view('backend.townshipdetails',compact('township'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $townships=Township::all();
        return view('backend.addtownship',compact('townships'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $township = new Township;
        $township->name = request('name'); 
         $township->save();
        return redirect()->route('townshipdetails.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

         
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $township=Township::find($id);
        return view('backend.edittownship',compact('township'));
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
            "name"=>'required',

        ]);

        $town=Township::find($id);
        $town->name=request('name');
        $town->save();
        return redirect()->route('townshipdetails.index');
    }

    public function delete($id)
    {
        $town=Township::find($id);
        $town->delete();
        return redirect()->route('townshipdetails.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
    }
}

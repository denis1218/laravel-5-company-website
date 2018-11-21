<?php

namespace App\Http\Controllers;

use App\TeethShade;
use Illuminate\Http\Request;

class TeethShadeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teethshade=TeethShade::orderBy('id','asc')->paginate(10);
        return view('teethShade',compact('teethshade'));
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
        $teethShade=new TeethShade();
        $teethShade->shade=$request->shade;
        $teethShade->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TeethShade  $teethShade
     * @return \Illuminate\Http\Response
     */
    public function show(TeethShade $teethShade)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeethShade  $teethShade
     * @return \Illuminate\Http\Response
     */
    public function edit(TeethShade $teethShade)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeethShade  $teethShade
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeethShade $teethShade)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeethShade  $teethShade
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=TeethShade::find($id);
        $delete->delete();
        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Oincom;
use Illuminate\Http\Request;
use function Sodium\compare;

class OincomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others=Oincom::orderBy('created_at','desc')->paginate(10);
        return view('ext_income',compact('others'));
//        return $others;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ext_income');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $other=new Oincom();
        $other->from_whom=$request->from_whom;
        $other->amount=$request->amount;
        $other->purpose=$request->purpose;
        $other->description=$request->description;
        $other->save();
        return redirect('other');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function show(Oincom $oincom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function edit(Oincom $oincom)
    {
        $others=Oincom::find($oincom);
        return view('ext_income',compact('others'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Edt=Oincom::find($id)->first();
        $Edt->from_whom=$request->from_whom;
        $Edt->amount=$request->amount;
        $Edt->purpose=$request->purpose;
        $Edt->description=$request->description;
        $Edt->save();
        return redirect('/other');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oincom $oincom)
    {
        //
    }
}
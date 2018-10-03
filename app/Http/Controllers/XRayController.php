<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Xray;
use Illuminate\Http\Request;

class XrayController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient=Xray::orderBy('id','asc')->paginate(10);
        return view('xraypatient_list',compact('patient'));
//        return $patient;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('treatment_operation');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rey=new Xray();
        $rey->tooth_number=$request->tooth_number;
        $rey->patient_id=$request->patient_id;
        $rey->patient_name=$request->patient_name;
        $rey->doctor_name=$request->doctor_name;
        $rey->xray_status=$request->input('xray_status');
        $rey->save();
        return redirect('/xray');
    //    return $request;

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function show(Xray $xray)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function edit(Xray $xray)
    {
        $patients=Patient::find($xray);
        $spats=Xray::find($xray);
        return view('xray_show',compact('spats','patients'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xray $xray)
    {
        $Edt=Xray::find($xray)->first();
        $Edt->tooth_number=$request->tooth_number;
        $Edt->patient_id=$request->patient_id;
        $Edt->patient_name=$request->patient_name;
        $Edt->doctor_name=$request->doctor_name;
        $Edt->xray_status=$request->xray_status;
        $Edt->save();
        return redirect('/xray');
    //    return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xray $xray)
    {
        //
    }
}

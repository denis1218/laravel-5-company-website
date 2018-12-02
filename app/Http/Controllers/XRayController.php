<?php

namespace App\Http\Controllers;

use App\Patient;
use App\Xray;
use Carbon\Carbon;
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
        $patient=Xray::orderBy('created_at','desc')->get();
        $count=Xray::where('xray_status','=','not')->get();
        $not=Xray::where('xray_status','=','not')->get();
        $yes=Xray::where('xray_status','=','yes')->get();
        return view('xraypatient_list',compact('patient','not','yes','count'));
//        return $not;
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
        if($request->tooth_number == null){
            return redirect()->back();
        }
        $rey->tooth_number=$request->tooth_number;
        $rey->patient_id=$request->patient_id;
        $rey->patient_name=$request->patient_name;
        $rey->doctor_name=$request->doctor_name;
        $rey->paid_amount=0;
        $rey->xray_status=$request->input('xray_status');
        $rey->created_at = Carbon::now();
        $rey->save();

        return redirect('/operation')->with('success','Patient registered for x-ray successfully');


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
    public function edit($id)
    {
        $spats=Xray::find($id);
        return view('xray_show',compact('spats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Xray  $xray
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $Edt=Xray::find($request->id);
        $Edt->tooth_number=$request->tooth_number;
        $Edt->patient_id=$request->patient_id;
        $Edt->patient_name=$request->patient_name;
        $Edt->doctor_name=$request->doctor_name;
        $Edt->xray_status=$request->xray_status;
        $Edt->save();
        return redirect('/xray');
//        return $Edt;
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

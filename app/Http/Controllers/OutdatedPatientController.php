<?php

namespace App\Http\Controllers;

use App\OutdatedPatient;
use App\OutdatedReceive;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class OutdatedPatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patients = OutdatedPatient::all();
        return view('patient.outdated_patient',compact('patients'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('patient.outdated_patient_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new OutdatedPatient();
        $patient->bill_number = $request->bill_number;
        $patient->firstname = $request->firstname;
        $patient->lastname = $request->lastname;
        $patient->phone = $request->phone;
        $patient->treatment = $request->treatment;
        $patient->date_register = $request->date_register;
        $patient->fee = $request->fee;
        $patient->paid = $request->paid;
        $patient->remaining = $request->remaining;
        $patient->save();
        return redirect('/outdated_patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\OutdatedPatient  $outdatedPatient
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    public function receive_fee(Request $request,$id)
    {

        $patient = OutdatedPatient::find($id);
        $receive_fee =  $request->receive;
        $patient->remaining = $patient->remaining - $receive_fee;
        $patient->update();
        $receive = new OutdatedReceive();
        $receive->paid = $receive_fee;
        $receive->outdated_id = $id;
        $receive->created_at = Carbon::now();
        $receive->save();
        return redirect()->back();
    }

    public function search(Request $request)
    {
        $query = $request->search;
        $patients = DB::table('outdated_patients')->where('firstname','like','%'.$query.'%')
            ->orWhere('lastname','like','%'.$query.'%')
            ->orWhere('phone','like','%'.$query.'%')->get();
        return view('patient.outdated_patient_search',compact('patients'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param OutdatedPatient $outdatedPatient
     */
    public function edit($id)
    {
        $patient = OutdatedPatient::find($id);
        return view('patient.outdated_patient_edit',compact('patient'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param OutdatedPatient $outdatedPatient
     */
    public function update(Request $request,$id)
    {
        $patient = OutdatedPatient::find($id);
        $patient->bill_number = $request->bill_number;
        $patient->firstname = $request->firstname;
        $patient->lastname = $request->lastname;
        $patient->phone = $request->phone;
        $patient->treatment = $request->treatment;
        $patient->date_register = $request->date_register;
        $patient->fee = $request->fee;
        $patient->paid = $request->paid;
        $patient->remaining = $request->remaining;
        $patient->update();
        return redirect('/outdated_patient');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param OutdatedPatient $outdatedPatient
     */
    public function destroy($id)
    {
        $patient = OutdatedPatient::find($id);
        $recieveOutdatedPatient = OutdatedReceive::where('outdated_id',$id)->get(['id']);
        OutdatedReceive::destroy($recieveOutdatedPatient->toArray());
        $patient->delete();
        return redirect()->back();
    }
}

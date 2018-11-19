<?php

namespace App\Http\Controllers;

use App\Income;
use App\Treatment;
use App\TreatmentList;
use Illuminate\Http\Request;
use App\Patient;
use Illuminate\Support\Facades\DB;

class patientReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_patient = Patient::with('doctor')->paginate(15);
        return view('patient.patient_report',compact('all_patient'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

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
//        $treatment = Treatment::with('patient')->get()->find($id);
        $patient = Patient::with('doctor')->get()->find($id);
        $patient_income = Treatment::where('patient_id','=',$id)->get();
//return $patient_income;
        return view('patient.print_reception', compact('patient','treatment','patient_income'));
    }

    public function search_patient(Request $request)
    {
        $query = $request->search;
        $data = DB::table('patients')->where('id_patient','like','%'.$query.'%')
            ->orWhere('name','like','%'.$query.'%')
            ->orWhere('lastname','like','%'.$query.'%')
            ->orWhere('phone','like','%'.$query.'%')->get();

        return view('patient.patient_report_search', compact('data'));

    }

    /*
     * this method is for printing patient report
     * in PDF file
     */
    public  function report($id){
        $treatment = Treatment::with('patient')->get()->find($id);
        $patient = Patient::with('doctor')->get()->find($id);

        return view('patient.patientPrint', compact('patient','treatment'));

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
    public function update(Request $request)
    {
//        return $request;
        $patient = Patient::find($request->id);
        $patient->name = $request->name;
        $patient->lastname = $request->lastname;
        $patient->phone = $request->phone;
        $patient->next_appointment = $request->next_appointment;
        $patient->status = $request->status;
        $patient->update();
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patien = Patient::find($id);
        $patien->delete();
        return redirect()->back();
    }
}

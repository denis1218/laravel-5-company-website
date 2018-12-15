<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Patient;
use App\Prescription;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PrescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::where('status', '=', 'first')
            ->whereDate('next_appointment', '=', Carbon::today())->get();
        return view('reception.prescription', compact('patient'));
    }

    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $med = $request->medicine;
        $patient_unit = $request->patient;
        $patient_id = $request->patient_id;
        $patient = Patient::find($patient_id);

        foreach ($med as $index => $me){

            $medic = Medicine::find($me);
            $medic->unit = $medic->unit - $patient_unit[$index];
            $medic->save();
        }

        foreach ($med as $index => $medicin){
            $prescription = new Prescription();
            $medice = Medicine::find($medicin);
            $prescription->medicine_name = $medice->name;
            $prescription->unit = $patient_unit[$index];
            $prescription->sale = $medice->sale;
            $prescription->patient_id = $patient_id;
            $prescription->total_fee = $medice->sale * $patient_unit[$index];
            $prescription->created_at = Carbon::now();
            $prescription->save();

        }
        $presc = Prescription::where('patient_id','=',$patient_id)->get();
//        return $presc;
        $num = 1;
        return view('print_pages.prescription_print',compact('presc','patient','num'));




    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Prescription $prescription
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $patient = Patient::find($id);
        $medicine = Medicine::all();
        return view('reception.add_medicine', compact('patient', 'medicine'));
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function edit(Prescription $prescription)
    {
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Prescription $prescription)
    {

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Prescription $prescription
     * @return \Illuminate\Http\Response
     */
    public  function destroy(Prescription $prescription)
    {
        //
    }
}

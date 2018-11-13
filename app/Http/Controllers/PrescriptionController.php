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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $med = $request->medicine;
        $patient_unit = $request->patient;
        $patient_id = $request->patient_id;

        foreach ($med as $index => $me){

            $medic = Medicine::find($me);
            $medic->unit = $medic->unit - $patient_unit[$index];
            $medic->save();

        }


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
        $medicine = Medicine::paginate(5);
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

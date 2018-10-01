<?php

namespace App\Http\Controllers;

use App\DentalDefectList;
use App\Patient;
use App\Treatment;
use App\TreatmentList;
use App\XRay;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $operation = Patient::orderBy('id', 'asc')->paginate(10);
        return view('doctor_operations')->with('operation', $operation);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient_in_treatment = Patient::find($id);

//        foreach($patient_in_treatment->treatments as $p)
//        {
//            dd($p->id);
//        }
        $treatments = Treatment::find($id);

        $treatementList = TreatmentList::all();

        $dentalDefectList = DentalDefectList::all();

        $checkValue = 0;


//        dd($patient_in_treatment);
//        foreach ($patient_in_treatment->treatments as $vis) {
//            dd($vis->treatment_id);
//        }

        $checkValue += 1;

        $patient_id = $patient_in_treatment->id;

        return view('treatment_operation', compact('patient_in_treatment',
            'patient_id', 'checkValue', 'treatementList', 'dentalDefectList', 'treatments'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//            dd($request->description);
//        dd($request);

        $treatment = new Treatment();
        $treatment->teeth_number = $request->teeth_number;
        $treatment->next_appointment = $request->next_appointment;
        $treatment->description = $request->description;
        $treatment->estimated_fee = $request->estimated_fee;
        $treatment->discount = $request->discount;
        $treatment->visits = $request->input('visits');
        $treatment->next_appointment = $request->input('next_appointment');
        $treatment->meridiem = $request->input('meridiem');// it is morning and afternoon of next appointment
        $treatment->status_visits = 'complate';
        $treatment->patient_id = $request->input('FK_id_patient');
        $treatment->treatment = $request->input('treatment');
        $treatment->dentaldefect = $request->input('dentaldefect');
        $treatment->status_pay = true;
        $treatment->have_xray = false;

        $treatment->save();
        return redirect()->back();

    }


    public function checkVisits()
    {
        $treatment = new Treatment();
        $count_visits = 0;

        if ($treatment->visits > 1) {
            $treatment->visits = $count_visits + 2;
        } else if ($treatment->visits > 2) {
            $count_visits .= $count_visits++;
        } else {
            $count_visits = 0;
        }
        return $count_visits;
    }

    /**
     * Display the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Treatment $treatment
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Treatment $treatment
     * @return \Illuminate\Http\Response
     */
    public function edit(Treatment $treatment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Treatment $treatment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Treatment $treatment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Treatment $treatment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Treatment $treatment)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\DentalDefectList;
use App\Income;
use App\Patient;
use App\Treatment;
use App\TreatmentList;
use App\XRay;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{

    protected $idPatient ;
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

        $checkValue=Patient::find($id)->treatment;
        foreach ($checkValue as $ch) {
            if($ch->visits==0){
                $ch->visits=1;
            }
            $ch->visits=$ch->visits+1;
        }
        $treatments = Treatment::find($id);

        $treatementList = TreatmentList::all();

        $dentalDefectList = DentalDefectList::all();

        $patient_id = $patient_in_treatment->id;

        return view('treatment_operation', compact('patient_in_treatment','patient_id', 'checkValue', 'treatementList', 'dentalDefectList', 'treatments'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $treatment = new Treatment();

        $treatment->teeth_number = $request->teeth_number;
        $treatment->next_appointment = $request->next_appointment;
        $treatment->description = $request->description;
        $treatment->estimated_fee = $request->estimated_fee;
        $treatment->discount = $request->discount;
        $treatment->remaining_fee = $treatment->estimated_fee - $treatment->discount;
        $treatment->paid_amount = 0;
        $treatment->visits = $request->input('visits');
        $treatment->next_appointment = $request->input('next_appointment');
        $treatment->meridiem = $request->input('meridiem');// it is morning and afternoon of next appointment
        $treatment->patient_id = $request->input('FK_id_patient');
        $treatment->treatment = $request->input('treatment');
        $treatment->dentaldefect = $request->input('dentaldefect');
        $treatment->status_pay = true;
        $treatment->have_xray = false;

        if($request->status_visits == null)
        {
            $treatment->status_visits = 'not complete';
        }else{
            $treatment->status_visits = $request->status_visits;
        }


        $treatment->save();
        return redirect('/operation');

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
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Treatment $treatment
     */
    public function edit($id)
    {
//        dd($id);

    }

    public function edit_treatment($id,$patient_id)
    {
        $patient_in_treatment = Patient::find($patient_id);
//        dd($patient_in_treatment);
        $last_treatment = Treatment::orderBy('id', 'desc')->find($id);
        if($last_treatment==null)
        {
            $checkValue = 1;
        }else{
            $checkValue = $last_treatment->visits;
        }
        $checkValue=$checkValue+1;
        $treatementList = TreatmentList::all();
        $dentalDefectList = DentalDefectList::all();
        $patient_id = $patient_in_treatment->id;
        return view('treatment_operation_edit', compact('patient_in_treatment',
            'treatementList','patient_id','checkValue', 'dentalDefectList','last_treatment'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Treatment $treatment
     */
    public function update(Request $request, $id)
    {

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

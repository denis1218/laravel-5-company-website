<?php

namespace App\Http\Controllers;

use App\DentalDefectList;
use App\Doctor;
use App\Income;
use App\Medicine;
use App\Patient;
use App\Prescription;
use App\Treatment;
use App\TreatmentList;
use App\XRay;
use Carbon\Carbon;
use Illuminate\Http\Request;

class TreatmentController extends Controller
{

    protected $idPatient;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = Auth()->user()->doctor_id;
        $operation = Doctor::find($id)->patient_for_today;
        $doctor = Doctor::all();
        return view('doctor_operations',compact('operation','doctor'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient_in_treatment = Patient::find($id);

        $checkValue = Patient::find($id)->treatment;
        foreach ($checkValue as $ch) {
            if ($ch->visits == 0) {
                $ch->visits = 1;
            } else {
                $ch->visits = $ch->visits + 1;
            }
        }
                $prescription = Prescription::where('patient_id','=',$id)->get();
                $medicine =  Medicine::all();
                $treatments = Treatment::find($id);

                $treatementList = TreatmentList::all();

                $dentalDefectList = DentalDefectList::all();

                $patient_id = $patient_in_treatment->id;


                return view('treatment_operation', compact('patient_in_treatment', 'patient_id', 'checkValue', 'treatementList', 'dentalDefectList', 'treatments','medicine','prescription'));

    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public
    function store(Request $request)
    {
        $treatment = new Treatment();

        $treatment->teeth_number = $request->teeth_number;

        $treatment->description = $request->description;
        $treatment->estimated_fee = $request->estimated_fee;
        $treatment->discount = $request->discount;
        $treatment->remaining_fee = $treatment->estimated_fee - $treatment->discount;
        $treatment->paid_amount = 0;
        $treatment->tooth_position=$request->tooth_position;
        $treatment->visits = $request->input('visits');
        $treatment->patient_id = $request->input('FK_id_patient');
        $treatment->treatment = $request->input('treatment');
        $treatment->dentaldefect = $request->input('dentaldefect');
        $treatment->status_pay = true;
        $treatment->have_xray = $request->have_xray;
        if($treatment->have_xray==null){
            $treatment->have_xray='no';
        }

        if ($request->status_visits == null) {
            $treatment->status_visits = 'not complete';
        } else {
            $treatment->status_visits = $request->status_visits;
        }

//            return $treatment;
        $treatment->save();
        return redirect('/operation');

    }


    public
    function checkVisits()
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
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param $id
     * @internal param Treatment $treatment
     */
    public function show(Request $request)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Treatment $treatment
     */
    public
    function edit($id)
    {

    }

    public function edit_treatment($id, $patient_id)
    {
        $patient_in_treatment = Patient::find($patient_id);


//        return $patient_in_treatment->visit;
//        dd($patient_in_treatment);

        $treatments = Treatment::orderBy('id', 'desc')->find($id);

        if ($treatments == null) {
            $checkValue = 0;
        } else {
            $checkValue = $treatments->visits;
        }


        $last_treatment = Treatment::orderBy('id', 'desc')->find($id);
        if ($last_treatment == null) {
            $checkValue = 1;
        } else {
            $checkValue = $last_treatment->visits;
        }

        $checkValue = $checkValue + 1;


        $treatementList = TreatmentList::all();
        $dentalDefectList = DentalDefectList::all();
        $patient_id = $patient_in_treatment->id;
        return view('treatment_operation_edit', compact('patient_in_treatment',
            'treatementList', 'patient_id', 'checkValue', 'dentalDefectList', 'last_treatment'));
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
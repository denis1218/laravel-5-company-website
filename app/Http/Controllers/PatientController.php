<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DoctorDemo;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient_all = Patient::all();
        $doctor = Doctor::find(1);
        $doctor_list = Doctor::all();
//        foreach($doctor_list as $doct){
//            foreach($doct->patients as $pat ){
////               dd($pat->name.$pat->lastname);
//                    dd($doct->id);
//            }
//        }

        return view('reception.appointment',compact('patient_all','doctor','doctor_list'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $doctor_list = Doctor::all();
        return view ('patient.patient',compact('doctor_list'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $patient = new Patient();
        $patient->name = $request->name;
        $patient->lastname = $request->lastname;
        $patient->gender = $request->gender;
        $patient->age = $request->age;
        $patient->phone = $request->phone;
        $patient->address = $request->address;

            $checkbox = $request->input('problem_health');
            $string='';
            foreach ($checkbox as $value){
                $string .=  $value.',';
            }
            $phonenumber = $request->phone;

        $patient->FK_id_Doctor = $request->input('FK_id_Doctor');
        $patient->status = 'new patient';
        $patient->problem_health = $string;
        $patient->id_patient = 'P-'.$phonenumber;
        $patient->save();
        return redirect('/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function show(Patient $patient)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function edit(Patient $patient)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Patient  $patient
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Patient $patient)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Patient $patient
     */
    public function destroy($id)
    {
        $patient = Patient::find($id);
        $patient->delete();
        return redirect()->back();
    }
}

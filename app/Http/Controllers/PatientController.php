<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DoctorDemo;
use App\Patient;
use App\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->date == null){
            $patient_all = Patient::whereDate('next_appointment',Carbon::today())->orderBy('updated_at', 'ASC')->get();
        }else{
            $patient_all = Patient::whereDate('next_appointment',$request->date)->orderBy('updated_at', 'ASC')->get();
        }
        $doctor_list = Doctor::all();
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

        $patient->doctor_id = $request->input('FK_id_Doctor');
        $patient->next_appointment = Carbon::now();
        $patient->status = 'new patient';
        $patient->problem_health = $string;
        $patient->id_patient = 'P-'.$phonenumber;
        $patient->save();
        return redirect('/patient');
    }

    /**
     * Display the specified resource.
     *
     * @param $date
     * @return \Illuminate\Http\Response
     * @internal param Patient $patient
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Patient $patient
     */
    public function edit($id)
    {
//        return $id;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Patient $patient
     */
    public function update(Request $request,$id)
    {
        $patient = Patient::find($id);
        $patient->next_appointment = Carbon::now();
        $patient->update();
        return redirect()->back();
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

    public function indexShowPreDay($id)
    {
//        $patient_all = Patient::whereDate('next_appointment',$id)->orderBy('updated_at', 'ASC')->get();
//        $doctor_list = Doctor::all();
//        return $patient_all;
//        return view('reception.appointment',compact('patient_all','doctor','doctor_list'));
    }

    public function indexShowNextDay($id)
    {
//        $patient_all = Patient::whereDate('next_appointment',$id)->orderBy('updated_at', 'ASC')->get();
//        $doctor_list = Doctor::all();
//        return view('reception.appointment',compact('patient_all','doctor','doctor_list'));
    }
}

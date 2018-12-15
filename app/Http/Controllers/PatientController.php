<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DoctorDemo;
use App\Patient;
use App\Prescription;
use App\Treatment;
use App\Xray;
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
        $patient->next_appointment = $request->appointment;
        $patient->time = $request->time;
        $patient->meridiem = $request->meridiem;
        $patient->job = $request->job;
        $patient->education = $request->education;
        $patient->status = 'first';
        $patient->created_at = Carbon::today();
        $patient->problem_health = $string;
        $patient->id_patient = 'P-'.$phonenumber;
        $patient->save();
        return redirect('/patient')->with('success','patient registered successfully');
    }

    public function storeFromDash(Request $request){
        $patient = new Patient();
        $patient->name = $request->firstname;
        $patient->lastname = $request->lastname;
        $patient->phone = $request->phone;
        $phonenumber = $request->phone;
        $patient->doctor_id = $request->doctor_id;
        $patient->next_appointment = $request->date;
         $patient->status = 'first';
         $patient->time = $request->time;
         $patient->meridiem = $request->meridiem;
        $patient->created_at = Carbon::today();
        $patient->id_patient = 'P-'.$phonenumber;
        $patient->save();
        return back();
    }
    /**
     * Display the specified resource.
     *
     * @param $date
     * @return \Illuminate\Http\Response
     * @internal param Patient $patient
     */
    public function show(Request $request)
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
        $doctors = Doctor::all();
        $patient = Patient::find($id);
        return view('patient.patient_edit',compact('patient','doctors'));
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
        $patient->id_patient = $request->id_patient;
        $patient->name = $request->name;
        $patient->lastname = $request->lastname;
        $patient->gender = $request->gender;
        $patient->age = $request->age;
        $patient->phone = $request->phone;
        $patient->address = $request->address;
        $patient->phone = $request->phone;
        $patient->doctor_id = $request->doctor_id;
        $patient->next_appointment = $request->next_appointment;
        $patient->time = $request->time;
        $patient->meridiem = $request->meridiem;
        $patient->job = $request->job;
        $patient->education = $request->education;
        $patient->status = $request->status;
        $patient->problem_health = $request->problem_health;
        $patient->update();
        return redirect('/patient');
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
        $treatmentPatient = Treatment::where('patient_id',$id)->get(['id']);
        $xrayPatient = Xray::where('patient_id',$id)->get(['id']);
        $prescritionPatient = Prescription::where('patient_id',$id)->get(['id']);

        Treatment::destroy($treatmentPatient->toArray());
        Xray::destroy($xrayPatient->toArray());
        Prescription::destroy($prescritionPatient->toArray());
        $patient->delete();
        return redirect()->back();
    }


    // show all new patient registred today
    // show which patient have (status = first)
    public function show_new_patients()
    {
//        echo "call method show new patients";
        $allNewPatientToday = Patient::where('status','=','first')
            ->whereDate('created_at','=',Carbon::today())->get();
        $countNewPatient = $allNewPatientToday->count();
        return view ('reception.list_new_patient_today',compact('allNewPatientToday','countNewPatient'));
    }



    // show all patient have next appointment
    // show all patient which (status != first)
    public function show_next_appointment_patient()
    {
        $allPatientNextAppointment = Patient::whereDate('next_appointment','=',Carbon::today())->get();
        return view ('reception.list_next_appointment_patient_today',compact('allPatientNextAppointment'));
    }




    public function updateNextappointmentPatient($id,Request $request){
        $patient = Patient::find($id);
        $patient->next_appointment = $request->next_appointment_date;
        $patient->time = $request->time;
        $patient->meridiem = $request->meridiem;
        $patient->update();
        return back();
    }




    // show all patient have next appointment have missing
    // this is comparable with who patient had next appointment last day
    // and the missing appointment and now we must call phone
    // show all patient which (status != first and where Carbon->yestarday)
    public function show_missing_next_appointment_patient()
    {
        $allPatientMissNextAppointment = Patient::whereDate('next_appointment','<',Carbon::today())->get();
        return view ('reception.miss_list_next_appointment_patient',compact('allPatientMissNextAppointment'));
//    return $allPatientMissNextAppointment;
    }

}

<?php

namespace App\Http\Controllers;

use App\Doctor;
use Illuminate\Http\Request;

class DoctorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctor::orderBy('id','asc')->paginate(10);
        return view('doctor_report_list')->with('doctors',$doctors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $doctor=new Doctor;
        $doctor->first_name=$request->input('first_name');
        $doctor->last_name=$request->input('last_name');
        $doctor->father_name=$request->input('father_name');
        $doctor->age=$request->input('age');
        $doctor->start_work_time=$request->input('start_work_time');
        $doctor->end_work_time=$request->input('end_work_time');
        $doctor->phone=$request->input('phone');
        $doctor->department=$request->input('dept_id');
        $doctor->gender=$request->input('gender');
        $doctor->salary_type=$request->input('salary_type');
        $doctor->salary_amount=$request->input('salary_amount');
        $doctor->max_patient=$request->input('max_patient');
        $doctor->save();

        return redirect('/doctors')->with('success','Doctor registered successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function show(Doctor $doctor)
    {
        $doctor=Doctor::find($doctor);
        return view('doctor_report')->with('doctor',$doctor);
//        return $doctor;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit(Doctor $doctor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Doctor $doctor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Doctor $doctor)
    {
        //
    }
}

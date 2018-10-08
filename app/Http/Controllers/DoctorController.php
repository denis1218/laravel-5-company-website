<?php

namespace App\Http\Controllers;
use App\Treatment;
use DB;
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
//    public  function  showdoctor(){
//        $doc = Doctor::orderBy('id','desc')->paginate(10);
//        return view('doctor_salary',compact('doc'));
//    }
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
        $doctor->department=$request->input('department');
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
        $doc = Doctor::orderBy('id','asc')->paginate(10);
        return view('doctor_salary',compact('doc'));
//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function edit( $id)
    {
        $doctor=Doctor::find($id);
        $patient=Doctor::find($id)->patient;
        $treatment=Doctor::find($id)->treatment;
        $total=$treatment->sum('paid_amount');
        if($doctor->salary_type=='fix'){
            $docfee=$doctor->salary_amount;
        }else{
            $docfee=($total*$doctor->salary_amount)/100;
        }
        return view('doctor_report',compact('doctor','patient','treatment','total','docfee'));
//        return $treatment;
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
        $payment=Doctor::find($doctor)->first();
        $payment->paid=$request->salary;
        $payment->remaining=$request->colection-$request->salary;
        $payment->from=$request->start;
        $payment->to=$request->end;
        $payment->save();
        return redirect('/doctors2');
//        return $payment;
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

<?php

namespace App\Http\Controllers;
use App\DoctorDepartment;
use App\User;
use DB;
use App\Treatment;
use App\Doctor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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
        $doctor_department = DoctorDepartment::all();
        return view('employee',compact('doctor_department'));
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
        $doct = Doctor::max('id');
        $user = new User();
        $user->firstname = $request->first_name;
        $user->lastname = $request->last_name;
        $user->password = Hash::make($request->password);
        $user->email = $request->email;
        $user->department = 'doctor';
        $user->doctor_id = $doct;
        $user->save();
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
        $doc = Doctor::orderBy('id','desc')->paginate(10);
        return view('doctor_salary',compact('doc'));
    }

    public function PayAdvance(Request $request,$id)
    {
        $adv=Doctor::find($id);
        $adv->advance=$request->advance;
        $adv->save();
        $msg  = 'Advance Successfully Added';
        return redirect()->back()->with(compact('msg'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Doctor $doctor
     */
    public function edit( $id)
    {
        $doctor=Doctor::find($id);
        $patient=Doctor::find($id)->patient;
        $treatment=Doctor::find($id)->treatment;

        if($doctor->to==null){
            $total=$treatment->sum('paid_amount');
        }else{
            $total=$treatment->sum('paid_amount');
        }
        if($doctor->salary_type=='fix'){
            $docfee=$doctor->salary_amount;
        }else{
            $docfee=($total*$doctor->salary_amount)/100;
        }
        return view('doctor_report',compact('doctor','patient','treatment','total','docfee'));
    }


    /*
     * edit doctor show form editing doctor
     */
    public function doctor_edit($id)
    {
        $doctor = Doctor::find($id);
        $doctor_department = DoctorDepartment::all();
        return view('doctor_edit',compact('doctor','doctor_department'));
    }


    public function update_doctor(Request $request,$id)
    {
        $doctor= Doctor::find($id);
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
        return redirect('/doctors');
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
        $payment->advance=$request->advance-$request->advance;
        $payment->from=$request->start;
        $payment->to=$request->end;
        $payment->save();
        return redirect('/doctors2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Doctor  $doctor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=Doctor::find($id);
        $delete->delete();
        return back();
    }
}

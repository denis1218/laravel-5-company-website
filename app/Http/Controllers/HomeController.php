<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patient = Patient::count();
        $apatient = Patient::whereDate('next_appointment', Carbon::today())->get();
        $doctor = Doctor::count();
        return view('dash',compact('patient','doctor','apatient'));
    }

    public function doctor_dashboard(){
        $id = Auth()->user()->doctor_id;
        $doctor = Doctor::find($id)->patient_for_today;
        $doct = Doctor::count();
        $patient = Patient::where('doctor_id','=',$id)->get();
        return view('dash_doctor',compact('doctor','doct','patient'));
    }

    public function reception(){
        $patient = Patient::whereDate('next_appointment',Carbon::today())->get();
        return view('reception.dash_reception',compact('patient'));
    }

}

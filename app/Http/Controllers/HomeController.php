<?php

namespace App\Http\Controllers;

use App\Doctor;

use App\Patient;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
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
    public function index2(){
        $id = Auth()->user()->doctor_id;
        $doctor = Doctor::find($id)->patient;
        $doct = Doctor::count();
        $patient = Patient::where('doctor_id','=',$id)->get();



        return view('dash_doctor',compact('doctor','doct','patient'));
    }
    public  function index3(){
        $patient = Patient::whereDate('next_appointment',Carbon::today())->get();
        return view('reception.dash_reception',compact('patient'));
    }
}

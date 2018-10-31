<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\ExpenseCatagory;
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
        $categories=ExpenseCatagory::all();
        $patient = Patient::count();
        $apatient = Patient::whereDate('next_appointment', Carbon::today())->get();
        $doctor = Doctor::count();
        return view('dash',compact('patient','doctor','apatient','categories'));
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


    /**
     * @return \Illuminate\Http\RedirectResponse
     * Update software using github
     */
    public function updateSystem()
    {
        shell_exec('c:\WINDOWS\system32\cmd.exe /c START  C:\xampp\htdocs\DentalCare_new\update_software.bat');
       return redirect()->back();
    }

    public function about_us()
    {
        return view('about_us');
    }

}

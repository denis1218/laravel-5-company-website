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
        $apatient = Patient::whereDate('created_at', Carbon::today())->get();
        $doctor = Doctor::count();
        return view('dash',compact('patient','doctor','apatient'));
    }
}

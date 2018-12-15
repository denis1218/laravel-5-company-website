<?php

namespace App\Http\Controllers;

use App\Article;
use App\Audit;
use App\Doctor;
use App\Expense;
use App\ExpenseCatagory;
use App\Patient;
use Carbon\Carbon;
use http\Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
        $categories = ExpenseCatagory::all();
        $patient = Patient::count();
        $apatient = Patient::whereDate('next_appointment', Carbon::today())->get();
        $doctor = Doctor::count();
        $doct = Doctor::all();
        $total_income = $this->total_income();
        $total_expense = $this->total_expense();
        $profit = $this->profit();
        return view('/dash', compact('patient', 'doctor', 'apatient', 'categories', 'total_income', 'total_expense', 'profit', 'doct'));
    }

    public function doctor_dashboard()
    {
        $id = Auth()->user()->doctor_id;
        $doctor = Doctor::find($id)->patient_for_today;
        $doct = Doctor::count();
        $patient = Patient::all();
        return view('dash_doctor', compact('doctor', 'doct', 'patient'));
    }

    public function reception()
    {
        $patient = Patient::whereDate('next_appointment', Carbon::today())->get();
        $doct = Doctor::count();
        return view('reception.dash_reception', compact('patient', 'doct'));
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

    public function total_income()
    {
        $start = new Carbon('first day of this month');
        $today = new Carbon('last day of this month');
        $ptotal = DB::table('treatments')->whereBetween('created_at', [$start, $today])->sum('paid_amount');
        $xtotal = DB::table('xrays')->whereBetween('created_at', [$start, $today])->sum('paid_amount');
        $ototal = DB::table('oincoms')->whereBetween('created_at', [$start, $today])->sum('amount');
        $optotal = DB::table('outdated_receives')->whereBetween('created_at', [$start, $today])->sum('paid');
        $total_income = $ptotal + $xtotal + $ototal + $optotal;
        return $total_income;
    }

    public function total_expense()
    {
        $start = new Carbon('first day of this month');
        $today = new Carbon('last day of this month');
        $expense = Expense::whereBetween('created_at', [$start, $today]);
        $totalExpense = $expense->sum('amount');
        return $totalExpense;
    }

    public function profit()
    {
        $profit = $this->total_income() - $this->total_expense();
        return $profit;
    }


    /**
     * @return bool
     * check if internet connection have can send email
     * if not cont't send email
     */
    function is_connected()
    {
        try {
            $connected = fopen("http://www.google.com:80/", "r");
            if ($connected) {
                return true;
            } else {
                return false;
            }
        } catch (Exception $ex) {
            return false;
        }
    }


    function log_activity()
    {
//        $all = Audit::all();
        $all = Audit::select('audits.id','users.firstname','audits.event','audits.auditable_type','audits.new_values','audits.old_values','audits.url','audits.created_at')
            ->join('users','users.id','=','audits.user_id')
            ->orderBy('audits.id','desc')
            ->get();
//        return $all_join;
        return view ('log_activity',compact('all'));

    }

    function search_log_activity(Request $request)
    {
        $all = Audit::select('audits.id','users.firstname','audits.event','audits.auditable_type','audits.new_values','audits.old_values','audits.url','audits.created_at')
            ->join('users','users.id','=','audits.user_id')
            ->where('users.firstname','like','%'.$request->search.'%')
            ->orderBy('audits.id','desc')
            ->get();

        return view('log_activity_search',compact('all'));
    }


}

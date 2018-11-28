<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\DSalary;
use App\Expense;
use Carbon\Carbon;
use Illuminate\Http\Request;

class DSalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Carbon
     */
    public function index(Request $request)
    {
        $id = $request->id;
        $start = Carbon::now()->startOfMonth()->toDateString();
        $end = Carbon::now()->endOfMonth()->toDateString();
        $emp = DSalary::whereBetween('date',[$start,$end])->where('doc_id','=',$id)->get();
        $total_paid = DSalary::where('doc_id','=',$id)->get();
        $total=$total_paid->sum('paid_amount');
        $doctor = Doctor::find($id);
        return view('doctor_salary',compact('emp','doctor','total','id','start','end'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new DSalary();
        $salary->paid_amount = $request->paid_amount;
        $salary->doc_id = $request->doc_id;
        $salary->start = $request->start;
        $salary->end = $request->end;
        $salary->date = Carbon::now();
        $salary->save();
        $id = $request->doc_id;
        $doctor  = Doctor::find($id);

        $expens = new Expense();
        $expens->receiver =  $doctor->first_name;
        $expens->amount = $request->paid_amount;
        $expens->category = 'salary';
        $expens->description = 'salary payment';
        $expens->created_at = Carbon::now();
        $expens->save();
        $ex = Expense::max('id');
        $expense = Expense::where('id','=',$ex)->get();

        return view('print_pages.dsalary_print',compact('expense'));
    }



    public  function PaySalary3(Request $request)
    {
        $salary = new DSalary();
        $salary->paid_amount = $request->paid_amount;
        $salary->doc_id = $request->doc_id;
        $salary->start = $request->start;
        $salary->end = $request->end;
        $salary->date = Carbon::now();
        $salary->save();
        $id = $request->doc_id;
        $doctor = Doctor::find($id);
        $expens = new Expense();
        $expens->receiver = $doctor->first_name;
        $expens->amount = $request->paid_amount;
        $expens->category = 'salary';
        $expens->description = 'salary payment';
        $expens->created_at = Carbon::now();
        $expens->save();
        $ex = Expense::max('id');
        $expense = Expense::where('id', '=', $ex)->get();

        return view('print_pages.dsalary_print', compact('expense'));
    }


    /**
     * Display the specified resource.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     * @internal param DSalary $dSalary
     */
    public function show(Request $request)
    {
        $startt = $request->start;
        $endd = $request->end;
        $id = $request->doc_id;
        $pay = DSalary::whereBetween('date',[$startt,$endd])->where('doc_id','=',$id)->get();
        $total_paid = DSalary::where('doc_id','=',$id)->get();
        $total=$total_paid->sum('paid_amount');
        $doctor = Doctor::find($id);
        return view('doctor_salary',compact('pay','doctor','total','id','startt','endd'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DSalary  $dSalary
     * @return \Illuminate\Http\Response
     */
    public function edit(DSalary $dSalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DSalary  $dSalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DSalary $dSalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DSalary  $dSalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(DSalary $dSalary)
    {
        //
    }
}

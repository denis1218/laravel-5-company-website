<?php

namespace App\Http\Controllers;

use App\Employee;
use App\Expense;
use App\ExpenseCatagory;
use App\PaySalary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PaySalaryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {

        $id = $request->id;
        $emp_id = $request->emp_id;
        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $emp = PaySalary::whereBetween('created_at',[$start,$end])->where('emp_id','=',$id)->get();
        $total_paid = PaySalary::where('emp_id','=',$id)->get();
        $employee = Employee::find($id);

        return view('emp_salary',compact('emp','employee','total_paid'));
    }



    public function showPayment(Request $request){
        $startt = $request->start;
        $endd = $request->end;
        $id = $request->emp_id;
        $pay = PaySalary::whereBetween('created_at',[$startt,$endd])->where('emp_id','=',$id)->get();
        $total_paid = PaySalary::where('emp_id','=',$id)->get();
        $employee = Employee::find($id);

        return view('emp_salary',compact('pay','employee','total_paid'));

    }
    public  function PaySalary3(Request $request){
        $salary = new PaySalary();
        $salary->paid_amount = $request->paid_amount;
        $salary->emp_id = $request->emp_id;
        $salary->created_at = Carbon::now();
        $salary->save();
        $id = $request->emp_id;
        $employee  = Employee::find($id);
        $expens = new Expense();
        $expens->receiver =  $employee->firstname;
        $expens->amount = $request->paid_amount;
        $expens->category = 'salary';
        $expens->description = 'salary payment';
        $expens->created_at = Carbon::now();
        $expens->save();
        $ex = Expense::max('id');
        $expense = Expense::where('id','=',$ex)->get();

        return view('print_pages.expense_print',compact('expense'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $salary = new PaySalary();
        $salary->paid_amount = $request->paid_amount;
        $salary->emp_id = $request->emp_id;
        $salary->created_at = Carbon::now();
        $salary->save();
         $id = $request->emp_id;
        $employee  = Employee::find($id);

        $expens = new Expense();
        $expens->receiver =  $employee->firstname;
        $expens->amount = $request->paid_amount;
        $expens->category = 'salary';
        $expens->description = 'salary payment';
        $expens->created_at = Carbon::now();
        $expens->save();
        $ex = Expense::max('id');
        $expense = Expense::where('id','=',$ex)->get();

        return view('print_pages.expense_print',compact('expense'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\PaySalary  $paySalary
     * @return \Illuminate\Http\Response
     */
    public function show(PaySalary $paySalary)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\PaySalary  $paySalary
     * @return \Illuminate\Http\Response
     */
    public function edit(PaySalary $paySalary)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\PaySalary  $paySalary
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, PaySalary $paySalary)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\PaySalary  $paySalary
     * @return \Illuminate\Http\Response
     */
    public function destroy(PaySalary $paySalary)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Expense;
use App\Patient;

use Carbon\Carbon;
use Illuminate\Http\Request;




class ExpenseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

       $expen =  Expense::whereDate('created_at', Carbon::today())->get();
       $totalExpense=$expen->sum('amount');
        return view('expenditure',compact('expen','totalExpense'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $capital=DB::table('expenses')->sum('amount');
        return view('expense_form',compact('capital'));
//        return $capital;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $expense = new Expense();
        $expense->receiver = $request->receiver;
        $expense->amount = $request->amount;
        $expense->category = $request->category;
        $expense->description = $request->description;

        $expense->created_at = \Carbon\Carbon::now();

        $expense->save();
        return redirect('expenditure');
    }
    public function FromDash(Request $request){
        $expense = new Expense();
        $expense->receiver = $request->receiver;
        $expense->amount = $request->amount;
        $expense->category = $request->category;
        $expense->description = $request->description;

        $expense->created_at = Carbon\Carbon::now();

        $expense->save();
        $patient = Patient::count();
        $apatient = Patient::whereDate('created_at', Carbon::today())->get();
        $doctor = Doctor::count();
        return back();
        $msg  = 'Successfully Inserted Into Database';
//        return view('dash',compact('patient','doctor','apatient','msg'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function show(Expense $expense)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function edit(Expense $expense)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Expense  $expense
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $exs = Expense::find($id);
        $exs->receiver = $request->receiver;
        $exs->amount = $request->amount;
        $exs->category = $request->category;
        $exs->description = $request->description;
        $exs->save();
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Expense $expense
     */
    public function destroy($id)
    {
        $exs = Expense::find($id);
        $exs->delete();
        return back();
    }
}

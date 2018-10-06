<?php

namespace App\Http\Controllers;

use App\Income;
use App\Treatment;
use Illuminate\Http\Request;

class IncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {



        $income = Treatment::where('remaining_fee','>','0')->paginate(10);

            return view('income',compact('income'));

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

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function show(Income $income)
    {
        $income = Treatment::where('remaining_fee',0)->get();

        return view('complete_income',compact('income'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function edit(Income $income)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $incom = Treatment::find($id);
        $incom->paid_amount = $incom->paid_amount + $request->paid_amount;
        $incom->remaining_fee = $incom->remaining_fee - $request->paid_amount;
        $incom->save();
        return redirect('income');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Income  $income
     * @return \Illuminate\Http\Response
     */
    public function destroy(Income $income)
    {
        //
    }
    public  function editPaid(Request $request,$id){
         $treat = Treatment::find($id);
         $treat->paid_amount = $request->paid_amount;
         $treat->save();
         return redirect('income');

    }
}

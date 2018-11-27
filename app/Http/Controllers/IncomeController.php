<?php

namespace App\Http\Controllers;

use App\Income;
use App\Xray;
use App\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;

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

        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $ptotal=DB::table('treatments')->whereBetween('created_at',[$start,$end])->sum('paid_amount');
        $xtotal=DB::table('xrays')->whereBetween('created_at',[$start,$end])->sum('paid_amount');
        $ototal=DB::table('oincoms')->whereBetween('created_at',[$start,$end])->sum('amount');
        $optotal=DB::table('outdated_receives')->whereBetween('created_at',[$start,$end])->sum('paid');
        $Gtotal=$ptotal+$xtotal+$ototal+$optotal;
            return view('income',compact('income','Gtotal'));

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
        $total=DB::table('treatments')->sum('paid_amount');
        $ptotal=DB::table('treatments')->sum('paid_amount');
        $xtotal=DB::table('xrays')->sum('paid_amount');
        $ototal=DB::table('oincoms')->sum('amount');
        $Gtotal=$ptotal+$xtotal+$ototal;
        return view('complete_income',compact('income','total','Gtotal'));
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
        return view('print_pages.pincome_print',compact('incom'));
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

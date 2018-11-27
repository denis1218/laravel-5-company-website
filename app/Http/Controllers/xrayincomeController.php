<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;
use App\XRay;
use DB;

class xrayincomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $xrey = XRay::where('paid_amount',0)->paginate(10);

        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $ptotal=DB::table('treatments')->whereBetween('created_at',[$start,$end])->sum('paid_amount');
        $xtotal=DB::table('xrays')->whereBetween('created_at',[$start,$end])->sum('paid_amount');
        $ototal=DB::table('oincoms')->whereBetween('created_at',[$start,$end])->sum('amount');
        $optotal=DB::table('outdated_receives')->whereBetween('created_at',[$start,$end])->sum('paid');
        $Gtotal=$ptotal+$xtotal+$ototal+$optotal;

        return view('xrey_income',compact('xrey','Gtotal'));
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }
    public function showComplete(){
        $xrey = XRay::where('paid_amount','>','0')->get();
        $total=DB::table('xrays')->sum('paid_amount');
        $ptotal=DB::table('treatments')->sum('paid_amount');
        $xtotal=DB::table('xrays')->sum('paid_amount');
        $ototal=DB::table('oincoms')->sum('amount');
        $Gtotal=$ptotal+$xtotal+$ototal;
        return view('completeXray',compact('xrey','total','Gtotal'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $xry = XRay::find($id);
        $xry->paid_amount = $request->paid_amount;
        $xry->save();
        return view('print_pages.xincome_print',compact('xry'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

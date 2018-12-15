<?php

namespace App\Http\Controllers;

use App\Oincom;
use Carbon\Carbon;
use DB;
use Illuminate\Http\Request;
use function Sodium\compare;

class OincomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $others=Oincom::orderBy('id','asc')->paginate(10);
        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $ptotal=DB::table('treatments')->whereBetween('created_at',[$start,$end])->sum('paid_amount');
        $xtotal=DB::table('xrays')->whereBetween('created_at',[$start,$end])->sum('paid_amount');
        $ototal=DB::table('oincoms')->whereBetween('created_at',[$start,$end])->sum('amount');
        $optotal=DB::table('outdated_receives')->whereBetween('created_at',[$start,$end])->sum('paid');
        $Gtotal=$ptotal+$xtotal+$ototal+$optotal;
        $total=DB::table('oincoms')->sum('amount');
        return view('ext_table',compact('others','total','Gtotal'));

//        return $others;
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ptotal=DB::table('treatments')->sum('paid_amount');
        $xtotal=DB::table('xrays')->sum('paid_amount');
        $ototal=DB::table('oincoms')->sum('amount');
        $Gtotal=$ptotal+$xtotal+$ototal;
        return view('ext_income',compact('Gtotal'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $other=new Oincom();
        $other->from_whom=$request->from_whom;
        $other->amount=$request->amount;
        $other->purpose=$request->purpose;
        $other->description=$request->description;
        $other->created_at = Carbon::now();
        $other->save();
        $print_id=Oincom::max('id');
        $print=Oincom::where('id','=',$print_id)->get();

        return view('print_pages.oincome_print',compact('print'));


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function show(Oincom $oincom)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $Edt=Oincom::find($id);
        $Edt->from_whom=$request->from_whom;
        $Edt->amount=$request->amount;
        $Edt->purpose=$request->purpose;
        $Edt->description=$request->description;
        $Edt->save();

        return redirect('/other-income')->with('success','Updated successfully');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Oincom  $oincom
     * @return \Illuminate\Http\Response
     */
    public function destroy(Oincom $oincom)
    {
        //
    }
}

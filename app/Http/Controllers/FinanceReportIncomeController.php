<?php

namespace App\Http\Controllers;

use App\Xray;
use Illuminate\Http\Request;
use App\Treatment;
use App\Oincom;
use App\Income;

class FinanceReportIncomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('finance_report.finance_report_income');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */


    //function for single day report
    public function create(Request $request)
    {
        $req = $request->create_date;

        $pinfo = Treatment::with('patient')->where('created_at', '=', $req)->get();
        $xinfo = Xray::with('patient')->where('created_at', '=', $req)->get();

        $oinfo = Oincom::where('created_at', '=', $req)->get();

        $total = $pinfo->sum('paid_amount') + $xinfo->sum('paid_amount') + $oinfo->sum('amount');
        return view('finance_report.finance_report_income_print', compact('pinfo', 'xinfo', 'oinfo', 'total'));
    }

    // function for range day report
    public function rangeDay(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $pinfo = Treatment::whereBetween('created_at', [$start, $end])->get();
        $xinfo = Xray::whereBetween('created_at', [$start, $end])->get();
        $oinfo = Oincom::whereBetween('created_at', [$start, $end])->get();
        $total = $pinfo->sum('paid_amount') + $xinfo->sum('paid_amount') + $oinfo->sum('amount');
        return view('finance_report.finance_report_income_print', compact('pinfo', 'xinfo', 'oinfo', 'total'));


    }

    //function for select type single report
    public function selectType(Request $request)
    {
        $selectRange = $request->select_type;
        $singleDate = $request->single;
        if ($selectRange == 'patient'){
            $pinfo = Treatment::where('created_at','=',$singleDate)->get();
            return view('finance_report.select_report_print',compact('pinfo'));

        }
        if ($selectRange == 'xray'){
            $xinfo = Xray::where('created_at','=',$singleDate)->get();
            return view('finance_report.select_report_print',compact('xinfo'));

        }
        if ($selectRange == 'other'){
            $oinfo = Oincom::where('created_at','=',$singleDate)->get();
            return view('finance_report.select_report_print',compact('oinfo'));

        }


    }

    //function for select type and range
    public function selectRange(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $selectRange = $request->rangeSelect;

        if ($selectRange == 'patient') {
            $pinfo = Treatment::whereBetween('created_at', [$start, $end])->get();
            return view('finance_report.select_report_print', compact('pinfo'));

        }
        if ($selectRange == 'xray') {
            $xinfo = Xray::whereBetween('created_at', [$start, $end])->get();
            return view('finance_report.select_report_print', compact('xinfo'));

        }
        if ($selectRange == 'other') {
            $oinfo = Oincom::whereBetween('created_at', '=', [$start, $end])->get();
            return view('finance_report.select_report_print', compact('oinfo'));

        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

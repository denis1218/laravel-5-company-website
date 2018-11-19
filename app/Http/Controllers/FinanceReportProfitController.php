<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\Prescription;
use Illuminate\Http\Request;
use App\Expense;
use App\Income;
use App\Oincom;
use App\Treatment;
use App\XRay;


class FinanceReportProfitController extends Controller
{

    /**
     * show just page report profit
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(){
        return view('finance_report.finance_report_profit');
    }


    public function showSingle(Request $request){
        $single = $request->single;
        $expense = Expense::where('created_at','=',$single)->get();
        $treatment = Treatment::where('created_at','=',$single)->get();
        $xray = XRay::where('created_at','=',$single)->get();
        $oincome = Oincom::where('created_at','=',$single)->get();
        $medicine = Prescription::where('created_at','=',$single)->get();
        $total_income = $treatment->sum('paid_amount')+$xray->sum('paid_amount')+$oincome->sum('amount')+$medicine->sum('total_fee');
        $total_expense = $expense->sum('amount');
        $total_profit = $total_income - $total_expense;
       return view('finance_report.finance_report_profit_print',compact('single','expense','treatment','xray','oincome','total_income','total_expense','total_profit','medicine'));

    }
    public function rangeDay(Request $request){
        $single =  $request->start;
        $end = $request->end;
        $expense = Expense::whereBetween('created_at',[$single,$end])->get();
        $treatment = Treatment::whereBetween('created_at',[$single,$end])->get();
        $xray = XRay::whereBetween('created_at',[$single,$end])->get();
        $oincome = Oincom::whereBetween('created_at',[$single,$end])->get();
        $medicine = Prescription::whereBetween('created_at',[$single,$end])->get();

        $total_income = $treatment->sum('paid_amount')+$xray->sum('paid_amount')+$oincome->sum('amount')+$medicine->sum('total_fee');
        $total_expense = $expense->sum('amount');
        $total_profit = $total_income - $total_expense;
        return view('finance_report.finance_report_profit_print',compact('single','treatment','xray','oincome','total_income','total_expense','total_profit','expense','end','medicine'));
//        return $total_expense;
    }


}

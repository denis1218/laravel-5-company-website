<?php

namespace App\Http\Controllers;

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
        $total_income = $treatment->sum('paid_amount')+$xray->sum('paid_amount')+$oincome->sum('amount');
        $total_expense = $expense->sum('amount');
        $total_profit = $total_income - $total_expense;
       return view('finance_report.finance_report_profit_print',compact('single','expense','treatment','xray','oincome','total_income','total_expense','total_profit'));

    }
    public function rangeDay(Request $request){
        $single =  $request->start;
        $end = $request->end;
        $expense = Expense::whereBetween('created_at',[$single,$end])->get();

        $emp_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Employee Salary')->sum('amount');
        $personal_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Personal')->sum('amount');
        $tax_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Taxes')->sum('amount');
        $rent_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Rent')->sum('amount');
        $office_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Office Supply')->sum('amount');
        $clinical_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Clinical Instrument')->sum('amount');
        $misc_expense = Expense::whereBetween('created_at',[$single,$end])->where('category','=','Miscellaneous')->sum('amount');
        $treatment = Treatment::whereBetween('created_at',[$single,$end])->get();
        $xray = XRay::whereBetween('created_at',[$single,$end])->get();
        $oincome = Oincom::whereBetween('created_at',[$single,$end])->get();
        $total_income = $treatment->sum('paid_amount')+$xray->sum('paid_amount')+$oincome->sum('amount');
        $total_expense = $expense->sum('amount');
        $total_profit = $total_income - $total_expense;
        return view('finance_report.finance_report_profit_print',compact('single','treatment','xray','oincome','total_income','total_expense','total_profit','emp_expense','personal_expense','office_expense','tax_expense','rent_expense','clinical_expense','misc_expense'));
//        return $total_expense;
    }


}

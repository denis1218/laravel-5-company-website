<?php

namespace App\Http\Controllers;

use App\Expense;
use Illuminate\Http\Request;

class FinanceReportExpenseController extends Controller
{
    public  function show(){
        return view('finance_report.finance_report_expenses');
    }
    public  function showSingle(Request $request){
        $single = $request->single;
        $expense = Expense::where('created_at','=',$single)->get();
        return view('finance_report.expense_report_print',compact('expense'));

    }
    public function showRangeDay(Request $request){
        $start = $request->start;
        $end = $request->end;
        $expense = Expense::whereBetween('created_at',[$start,$end])->orderby('created_at','asc')->get();
        return view('finance_report.expense_report_print',compact('expense'));
    }
    public function singleDaySelect(Request $request){
        $single = $request->singDay;
        $selectType = $request->selectTypeSingle;
        $expense = Expense::where('created_at','=',$single)->where('category','=',$selectType)->get();
        return view('finance_report.expense_report_print',compact('expense'));

    }
    public function RangeDaySelect(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $category = $request->category;
        $expense = Expense::whereBetween('created_at',[$start,$end])->where('category','=',$category)->get();
        return view('finance_report.expense_report_print',compact('expense'));

    }
}

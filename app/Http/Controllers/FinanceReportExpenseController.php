<?php

namespace App\Http\Controllers;

use App\Expense;
use App\ExpenseCatagory;
use Illuminate\Http\Request;

class FinanceReportExpenseController extends Controller
{
    /**
     * show main page expense report finance
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function show(){
        $category = ExpenseCatagory::all();
        return view('finance_report.finance_report_expenses',compact('category'));

    }


    /**
     * shows single day report of expense
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public  function showSingle(Request $request){
        $single = $request->single;
        $expense = Expense::where('created_at','=',$single)->get();
        return view('finance_report.expense_report_print',compact('expense'));
    }


    /**
     * show report expense by date range
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function showRangeDay(Request $request){
        $start = $request->start;
        $end = $request->end;
        $expense = Expense::whereBetween('created_at',[$start,$end])->orderby('created_at','asc')->get();
        return view('finance_report.expense_report_print',compact('expense'));
    }


    /**
     * show report expense single day grouped by expense category
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function singleDaySelect(Request $request){
        $single = $request->singDay;
        $category = $request->selectTypeSingle;
        $expense = Expense::where('created_at','=',$single)->where('category','=',$category)->get();
        return view('finance_report.expense_report_print',compact('expense','category'));
    }

    /**
     * show expense report by rang grouped by expense category
     *
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function RangeDaySelect(Request $request)
    {
        $start = $request->start;
        $end = $request->end;
        $category = $request->category;
        $expense = Expense::whereBetween('created_at',[$start,$end])->where('category','=',$category)->get();
        return view('finance_report.expense_report_print',compact('expense','category'));
    }
}

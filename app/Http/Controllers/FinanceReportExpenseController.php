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
        return $expense;
    }
}

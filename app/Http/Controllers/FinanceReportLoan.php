<?php

namespace App\Http\Controllers;

use App\Item;
use App\Loan;
use App\Trader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceReportLoan extends Controller
{

    public function report()
    {
        $traders = Trader::all();
        return view('finance_report.finance_report_loan', compact('traders'));
    }

    public function all_loan()
    {
        $loans_price = Trader::select('traders.name','traders.last_name','traders.phone','traders.organization',DB::raw('SUM(items.total_price) as sum_price'))
                                ->join('items','items.trader_id','=','traders.id')
                                ->groupBy('traders.name','traders.last_name','traders.phone','traders.organization')
                                ->get();

        $loans_paid = Trader::select('traders.name','traders.last_name','traders.phone','traders.organization',DB::raw('SUM(loans.paid) as sum_paid'))
                                ->join('loans','loans.trader_id','=','traders.id')
                                ->groupBy('traders.name','traders.last_name','traders.phone','traders.organization')
                                ->get();

        return view('finance_report.finance_report_loan_print_all', compact('loans_price','loans_paid'));
    }


    public function single_supplier(Request $request)
    {
        $loans_price = Trader::select('traders.name','traders.last_name','traders.phone','traders.organization',DB::raw('SUM(items.total_price) as sum_price'))
            ->join('items','items.trader_id','=','traders.id')
            ->where('traders.id','=',$request->supplier_id)
            ->groupBy('traders.name','traders.last_name','traders.phone','traders.organization')
            ->get();

        $loans_paid = Trader::select('traders.name','traders.last_name','traders.phone','traders.organization',DB::raw('SUM(loans.paid) as sum_paid'))
            ->join('loans','loans.trader_id','=','traders.id')
            ->where('traders.id','=',$request->supplier_id)
            ->groupBy('traders.name','traders.last_name','traders.phone','traders.organization')
            ->get();


        return view('finance_report.finance_report_loan_print_all', compact('loans_price','loans_paid'));
    }








}

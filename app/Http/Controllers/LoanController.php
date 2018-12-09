<?php

namespace App\Http\Controllers;

use App\Expense;
use Carbon\Carbon;
use DB;
use App\Loan;
use App\Trader;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class LoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items = Loan::orderBy('id', 'asc')->paginate(10);
        $ptotal = DB::table('loans')->sum('paid');
        return view('trader.cpaid', compact('items', 'ptotal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $loan = Trader::find($id);
        $ln = $loan->id;
        $items = Trader::find($id)->item;
        $loans = Trader::find($id)->loan;
        $itotal = $items->sum('total_price');
        $ltotal = $loans->sum('paid');
        $rem = $itotal - $ltotal;
        return view('trader.loan_form', compact('ln', 'rem'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     *  $expens->receiver = $request->receiver;
     * $expens->amount = $request->amount;
     * $expens->category = $request->category;
     * $expens->description = $request->description;
     * $expens->created_at = Carbon::now();
     */
    public function store(Request $request)
    {
        $Lon = new Loan();
        $Lon->paid = $request->paid;
        $Lon->receiver = $request->receiver;
        $Lon->trader_id = $request->trader_id;
        $Lon->save();
//        Also save in Expense Table for clearing Capital of money in clinic
//        and also can get report of paid loan from trader
        $expens = new Expense();
        $expens->receiver = $request->receiver;
        $expens->amount = $request->paid;
        $expens->category = "paid loan";
        $expens->description = "Paid Loan for receiver :`" . $request->receiver . "` at date : " . Carbon::now() . " ";
        $expens->created_at = Carbon::now();
        $expens->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function show(Loan $loan)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function edit(Loan $loan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Loan $loan)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Loan $loan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Loan $loan)
    {
        //
    }
}

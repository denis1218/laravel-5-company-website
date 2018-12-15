<?php

namespace App\Http\Controllers;

use App\Item;
use App\Loan;
use App\Trader;
use Illuminate\Http\Request;

class TraderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $traders=Trader::orderBy('id','asc')->paginate(10);
        return view('trader.trader',compact('traders'));
    }


    public function itemTrader(){
        $traders=Trader::orderBy('id','asc')->paginate(10);
        return view('trader.item_trade',compact('traders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trader.trader_form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $trader=new Trader();
        $trader->name=$request->name;
        $trader->last_name=$request->last_name;
        $trader->phone=$request->phone;
        $trader->organization=$request->organization;
        $trader->address=$request->address;
        $trader->payment_process=$request->payment_process;
        $trader->save();
        return redirect('/trader');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function show(Trader $trader)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Trader  $trader
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $trader=Trader::find($id);
        return view('trader.trader_edit',compact('trader'));
//        return $trader;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return Request
     * @internal param $id
     * @internal param Trader $trader
     */
    public function update(Request $request,$id)
    {
        $trader=Trader::find($id);
        $trader->name=$request->name;
        $trader->last_name=$request->last_name;
        $trader->phone=$request->phone;
        $trader->organization=$request->organization;
        $trader->address=$request->address;
        $trader->payment_process=$request->payment_process;
        $trader->save();
        return redirect('/trader');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param Trader $trader
     */
    public function destroy($id)
    {
        $delete=Trader::find($id);
        $itemTrader = Item::where('trader_id',$id)->get(['id']);
        Item::destroy($itemTrader->toArray());
        $loanTrader = Loan::where('trader_id',$id)->get(['id']);
        Loan::destroy($loanTrader->toArray());
        $delete->delete();
        return redirect()->back();
    }
}

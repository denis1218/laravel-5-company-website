<?php

namespace App\Http\Controllers;

use App\Item;
use App\Trader;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $items=Item::orderBy('id','asc')->paginate(10);
        return view('item',compact('items'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Trader[]|\Illuminate\Database\Eloquent\Collection
     */
    public function create()
    {
        $trader=Trader::all();
        return view('item_form',compact('trader'));
//        return $trader;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $item=new Item();
        $item->kind=$request->kind;
        $item->quantity=$request->quantity;
        $item->unit_price=$request->unit_price;
        $item->total_price=$request->total_price;
        $item->description=$request->description;
        $item->bill_number=$request->bill_number;
        $item->trader_id=$request->trader_id;
        $item->save();
        return redirect('/item');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function show(Item $item)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function edit(Item $item)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Item $item)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Item  $item
     * @return \Illuminate\Http\Response
     */
    public function destroy(Item $item)
    {
        //
    }
}

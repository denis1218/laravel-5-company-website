<?php

namespace App\Http\Controllers;

use App\TreatmentList;
use Illuminate\Http\Request;
use Session;
class TreatmentListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $treatment = TreatmentList::all();
        return view('treatment_list',compact('treatment'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $treatment = new TreatmentList();
        $treatment->treatment = $request->treatment;
        $treatment->estimated_fee = $request->estimated_fee;
        $treatment->color = $request->color;
        $treatment->save();
        Session::flash('success','inserted successfully');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TreatmentList  $treatmentList
     * @return \Illuminate\Http\Response
     */
    public function show(TreatmentList $treatmentList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TreatmentList  $treatmentList
     * @return \Illuminate\Http\Response
     */
    public function edit(TreatmentList $treatmentList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TreatmentList  $treatmentList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TreatmentList $treatmentList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TreatmentList  $treatmentList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=TreatmentList::find($id);
        $delete->delete();
        return back();
    }
}

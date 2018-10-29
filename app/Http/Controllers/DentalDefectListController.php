<?php

namespace App\Http\Controllers;

use App\DentalDefectList;
use Illuminate\Http\Request;

class DentalDefectListController extends Controller
{
    /**
     * Display a listing of the resource.
     *return all info about Dental Defect problem health
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dental = DentalDefectList::all();
        return view('dental_defect_list',compact('dental'));
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
     * Store a newly created resource Dental Defect
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dental = new DentalDefectList();
        $dental->dental_defect = $request->dental_defect;
        $dental->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DentalDefectList  $dentalDefectList
     * @return \Illuminate\Http\Response
     */
    public function show(DentalDefectList $dentalDefectList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DentalDefectList  $dentalDefectList
     * @return \Illuminate\Http\Response
     */
    public function edit(DentalDefectList $dentalDefectList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DentalDefectList  $dentalDefectList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DentalDefectList $dentalDefectList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DentalDefectList  $dentalDefectList
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=DentalDefectList::find($id);
        $delete->delete();
        return redirect('doctor_department')->with('success','Record Deleted Successfully');
    }
}

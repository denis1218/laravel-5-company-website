<?php

namespace App\Http\Controllers;

use App\TeethCoverType;
use App\Treatment;
use Illuminate\Http\Request;
use App\Teeth;
use Illuminate\Support\Facades\DB;

class TeethController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $teeth = new Teeth();
        $nextId = DB::table('treatments')->max('id') + 1;

        $teeth->tooth_number = $request->tooth_number;
//        $teeth->type_treatment = $request->type_treatment;
        $teeth->treatment = $request->treatment;
        $teeth->dentaldefect =  $request->dentaldefect;
        $teeth->treatment_id = $nextId;
        $teeth->patient_id = $request->patient_id;
        $teeth->save();
        return back();

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $teeth = Teeth::find($id);
        $teeth->delete();
        return redirect()->back();
    }
}

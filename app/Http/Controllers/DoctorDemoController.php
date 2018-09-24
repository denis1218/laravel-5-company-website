<?php

namespace App\Http\Controllers;

use App\DoctorDemo;
use Illuminate\Http\Request;

class DoctorDemoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /**
         * $table->string('doctor_name');
        $table->string('doctor_avail');
        $table->integer('max_patient');
        $table->integer('have_patient');
         */
        $doctor = new DoctorDemo();
        $doctor->doctor_name = $request->doctor_name;
        $doctor->doctor_avail=$request->doctor_avail;
        $doctor->max_patient = $request->max_patient;
        $doctor->have_patient = $request->have_patient;
        $doctor->save();
        return $doctor;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorDemo  $doctorDemo
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorDemo $doctorDemo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorDemo  $doctorDemo
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorDemo $doctorDemo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorDemo  $doctorDemo
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorDemo $doctorDemo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorDemo  $doctorDemo
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorDemo $doctorDemo)
    {
        //
    }
}

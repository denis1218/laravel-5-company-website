<?php

namespace App\Http\Controllers;

use App\DoctorDepartment;
use Illuminate\Http\Request;

class DoctorDepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctor_department = DoctorDepartment::all();
        return view('doctor_department',compact('doctor_department'));
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
     *return back to Doctor form
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $department = new DoctorDepartment();
        $department->department = $request->department;
        $department->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function show(DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function edit(DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, DoctorDepartment $doctorDepartment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\DoctorDepartment  $doctorDepartment
     * @return \Illuminate\Http\Response
     */
    public function destroy(DoctorDepartment $doctorDepartment)
    {
        //
    }
}

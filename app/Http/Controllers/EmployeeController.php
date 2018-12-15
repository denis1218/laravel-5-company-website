<?php

namespace App\Http\Controllers;

use App\Employee;
use App\PaySalary;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employee = Employee::all();
        return view('employee_list',compact('employee'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('employee_others');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->phone = $request->phone;
        $employee->salary = $request->salary;
        $employee->address  = $request->address;
        $employee->position  = $request->position;
        $employee->save();
        return redirect('employee');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit(Employee $employee)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $employee = Employee::find($id);
        $employee->firstname = $request->firstname;
        $employee->lastname = $request->lastname;
        $employee->gender = $request->gender;
        $employee->age = $request->age;
        $employee->phone = $request->phone;
        $employee->salary = $request->salary;
        $employee->address  = $request->address;
        $employee->position  = $request->position;
        $employee->save();
        return redirect('employee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employeeSalary = PaySalary::where('emp_id',$id)->get(['id']);
        PaySalary::destroy($employeeSalary->toArray());
        $employee->delete();
        return back();
    }
}

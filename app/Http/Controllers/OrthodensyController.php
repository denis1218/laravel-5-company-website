<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Orthodensy;
use App\Patient;
use App\Treatment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class OrthodensyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth()->user()->department=='doctor'){
            $id = Auth()->user()->doctor_id;
            $operation = Doctor::find($id)->patient_for_today;
        }
        $operations=Patient::paginate(10);
        $doctor = Doctor::all();
        return view('orthodensy_patient_list',compact('operation','doctor','operations'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($id)
    {
        $patient_in_treatment = Patient::find($id);
        $orthodensy_treatment = Orthodensy::where('patient_id','=',$id)->with('treatment')->get();

        return view('orthodensy_table',compact('patient_in_treatment','orthodensy_treatment'));
    }
    public function create_orthodensy($id){
        $patient = Patient::find($id);
        return view('create_orthodensy_patient',compact('patient'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        if ($request->has('image')){
            $file = $request->file('image');
            $file = $file->getClientOriginalExtension();
            $name = time().''.rand(1,90).'orthodensy.'.$file;
            $path = $request->image->move('uploads/orthodensy_image/',$name);
        }
        else{
            $name = '';
        }
        $treatment = new Treatment();
        $treatment->type_treatment = 'Orthodensy Treatment';
        $treatment->status_visits = 'first time';
        $treatment->status_pay = '1';
        $treatment->estimated_fee = $request->estimated_fee;
        $treatment->paid_amount = 0;
        $treatment->discount = $request->discount;
        $treatment->patient_id  = $request->patient_id;
        $treatment->remaining_fee = $request->estimated_fee - $request->discount;
        $treatment->description = $request->description;
        $treatment->created_at = Carbon::now();
        $treatment->save();
        $treat = Treatment::max('id');
        $orthodensy = new Orthodensy();
        $orthodensy->img = $name;
        $orthodensy->treatment_id = $treat;
        $orthodensy->patient_id = $request->patient_id;
        $orthodensy->save();
        return back();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Orthodensy  $orthodensy
     * @return \Illuminate\Http\Response
     */
    public function show(Orthodensy $orthodensy)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Orthodensy  $orthodensy
     * @return \Illuminate\Http\Response
     */
    public function edit(Orthodensy $orthodensy)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Orthodensy  $orthodensy
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Orthodensy $orthodensy)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Orthodensy  $orthodensy
     * @return \Illuminate\Http\Response
     */
    public function destroy(Orthodensy $orthodensy)
    {
        //
    }
}

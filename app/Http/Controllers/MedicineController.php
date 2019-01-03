<?php

namespace App\Http\Controllers;

use App\Medicine;
use App\MedicineCategory;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $medicine = Medicine::all();
        $category = MedicineCategory::all();
        return view('medicine',compact('medicine','category'));
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
        try {
            $medicine = new Medicine();
            $medicine->name = $request->name;
            $medicine->unit = $request->unit;
            $medicine->category = $request->category;
            $medicine->person = $request->person;
            $medicine->buy = $request->buy;
            $medicine->sale = $request->sale;
            $medicine->save();
            return redirect('medicine2');
        }
        catch (\Exception $e) {
            if ($e->getCode() == '42S22') {
                $column_not_found = 'column not found';
                return view('errors_page', compact('column_not_found'));
            }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function show(Medicine $medicine)
    {
        $medicine = Medicine::all();
        return view('medicine_list',compact('medicine'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function edit(Medicine $medicine)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $medicine = Medicine::find($id);
        $medicine->name = $request->name;
        $medicine->unit = $request->unit;
        $medicine->category = $request->category;
        $medicine->person  = $request->person;
        $medicine->buy = $request->buy;
        $medicine->sale = $request->sale;
        $medicine->save();
        return redirect('medicine2');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Medicine  $medicine
     * @return \Illuminate\Http\Response
     */
    public  function delete($id){
        $medicine = Medicine::find($id);
//        return $medicine;
         $medicine->delete();
//        $medicine->save();
        return redirect('medicine');
    }
    public function destroy($id)
    {
        $delete=Medicine::find($id);
        $delete->delete();
    }
}

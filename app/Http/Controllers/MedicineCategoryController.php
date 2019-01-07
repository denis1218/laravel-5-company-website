<?php

namespace App\Http\Controllers;

use App\MedicineCategory;
use Illuminate\Http\Request;

class MedicineCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = MedicineCategory::all();
        return view('medicine_category',compact('category'));
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
            $category = new MedicineCategory();
            $category->name = $request->name;
            $category->save();
            return redirect('medicine_category');
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
     * @param  \App\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MedicineCategory $medicineCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MedicineCategory  $medicineCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medicine = MedicineCategory::find($id);
        $medicine->delete();
        return redirect()->back();
    }
}

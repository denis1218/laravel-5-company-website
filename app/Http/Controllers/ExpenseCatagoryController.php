<?php

namespace App\Http\Controllers;

use App\ExpenseCatagory;
use Illuminate\Http\Request;

class ExpenseCatagoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category = ExpenseCatagory::all();
        return view ('expense_category',compact('category'));
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
     *return back to Form
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $category = new ExpenseCatagory();
            $category->category = $request->category;
            $category->save();
            return redirect()->back();
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
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function show(ExpenseCatagory $expenseCatagory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function edit(ExpenseCatagory $expenseCatagory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ExpenseCatagory  $expenseCatagory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ExpenseCatagory $expenseCatagory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param $id
     * @return \Illuminate\Http\Response
     * @internal param ExpenseCatagory $expenseCatagory
     */
    public function destroy($id)
    {
        $category = ExpenseCatagory::find($id);
        $category->delete();
        return redirect()->back();
    }
}

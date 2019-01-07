<?php

namespace App\Http\Controllers;

use App\TeethCoverType;
use Illuminate\Http\Request;

class TeethCoverTypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teethcover=TeethCoverType::orderBy('id','asc')->paginate(10);
        return view('teethcover',compact('teethcover'));
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
            $teethcover = new TeethCoverType();
            $teethcover->type = $request->cover;
            $teethcover->price = $request->price;
            $teethcover->save();
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
     * @param  \App\TeethCoverType  $teethCoverType
     * @return \Illuminate\Http\Response
     */
    public function show(TeethCoverType $teethCoverType)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TeethCoverType  $teethCoverType
     * @return \Illuminate\Http\Response
     */
    public function edit(TeethCoverType $teethCoverType)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TeethCoverType  $teethCoverType
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TeethCoverType $teethCoverType)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TeethCoverType  $teethCoverType
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete=TeethCoverType::find($id);
        $delete->delete();
        return redirect()->back();
    }
}

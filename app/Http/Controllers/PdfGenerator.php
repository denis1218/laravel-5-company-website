<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\App;
use PDF;
use Illuminate\Http\Request;

class PdfGenerator extends Controller
{
    public function PDF()
    {
//        $pdf = App::make('dompdf.wrapper');
        $data = ['title'=>'test'];
        $pdf = PDF::loadView('testpdf', $data);
        return $pdf->download('tst.pdf');
    }
}

<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/patient', function () {
    return view('patient');
});


Route::get('/doctor', function () {
    return view('doctor');
});

Route::get('/appo', function () {
    return view('appointment');
});

Route::get('/reception', function () {
    return view('reception');
});

Route::get('/detailinvoice', function () {
    return view('detailsReception');
});


Route::get('/doctor_operations', function () {
    return view('doctor_operations');
});

Route::get('/xray', function () {
    return view('Xrey_dep');
});

Route::get('/medicine', function () {
    return view('medicine');
});

Route::get('/next_appointment', function () {
    return view('next_appointment');
});




<?php


Route::get('/', function () {
    return view('/login');
});
Route::get('login',function (){
   return view('/login');
});
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


Route::get('/patient', function () {
    return view('patient');
});
// Employee Registration
Route::get('/employee', function () {
    return view('/employee');
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

// doctor treatment operation page have three option
Route::get('/doctor_operations', function () {
    return view('doctor_operations');
});

// X-Ray page
Route::get('/xray', function () {
    return view('Xrey_dep');
});
Route::get('treatment_operation', function () {
    return view('treatment_operation');
});

// medicine page in treatement -> medicine route
Route::get('/medicine', function () {
    return view('medicine');
});
Route::resource('/patient', 'PatientController');

Route::resource('/doctor_store', 'DoctorDemoController');

// next appointment page
Route::get('/next_appointment', function () {
    return view('next_appointment');
});


Route::get('/income', function () {
    return view('income');
});

Route::get('/ext_income', function () {
    return view('ext_income');
});


Route::get('iframe', function () {
    return view('iframe');
});

Route::get('/iframe', function () {
    return view('/iframe');
});
    Route::post('dash2', 'UserController@authenticat');
// dashboard of clinic
    Route::get('/dash', function () {
        return view('dash');
    });

// show all account users
    Route::get('/account', function () {
        return view('account');
    });

// create new users
    Route::get('/create_account', function () {
        return view('create_account');
    });

    Route::get('/restore', function () {
        return view('restore');
    });

    Route::get('/explore_backups', function () {
        return view('explore_backups');
    });

    Route::get('create_backups', function () {
        return view('create_backups');
    });


// report doctors
    Route::get('/doctor_report', function () {
        return view('doctor_report');
    });

// Financial report
    Route::get('/finance_report', function () {
        return view('finance_report');
    });


    // report doctors
    Route::get('/report_doctors', function () {
        return view('report_doctors');
    });

// Financial report daily
    Route::get('/finance_report_income', function () {
        return view('finance_report.finance_report_income');
    });

// Financial report date
    Route::get('/finance_report_expenses', function () {
        return view('finance_report.finance_report_expenses');
    });

// Financial report date
    Route::get('/finance_report_profit', function () {
        return view('finance_report.finance_report_profit');
    });

    Route::get('/date_report_patient', function () {
        return view('date_report_patient');
    });

    Route::get('/patient_history_print', function () {
        return view('patient_history_print');
    });

    Route::get('/next_appointment_list', function () {
        return view('next_appointment_list');
    });
// patient report
    Route::get('print_report', function () {
        return view('print_report');
    });

    Route::get('/dash_reception', function () {
        return view('/dash_reception');
    });

    Route::get('/doctor_report_list', function () {

        return view('/doctor_report_list');
    });

    Route::get('/dash_doctor', function () {
        return view('/dash_doctor');
    });

    Route::get('/pdf', 'PdfGenerator@PDF');
    Route::get('xrey_income', function () {
        return view('xrey_income');
    });
//doctor salary
    Route::get('/doctor_salary', function () {
        return view('doctor_salary');
    });


    Route::get('patient/{id}/delete', 'PatientController@destroy');

// Doctor Registrationexp
Route::resource('doctors','DoctorController');
Route::get('expense_form',function (){
   return view('expense_form');
});
Route::resource('/expenditure','ExpenseController');
Route::get('expenditure2/{id}','ExpenseController@destroy');
//Route::patch('expenditure3/{id}','ExpenseController@update');



// report patient
Route::resource('/patient_report', 'patientReportController');


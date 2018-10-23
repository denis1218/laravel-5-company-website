<?php


//
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
Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


//Route::middleware('auth')->group(function () {


Route::get('/dash', 'HomeController@index')->name('home');


//Route::get('/dash', 'HomeController@index')->name('home');

//route for dash

Route::middleware('auth')->group(function () {


    Route::get('/dash', 'HomeController@index');


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


    Route::get('/dash', 'HomeController@index')->name('home');


// doctor treatment operation page have three option
//    Route::get('/doctor_operations', function () {
//        return view('doctor_operations');
//    });

// X-Ray page
//    Route::get('/xray', function () {
//        return view('Xrey_dep');
//    });
//    Route::get('treatment_operation', function () {
//        return view('treatment_operation');
//    });

    Route::resource('/patient', 'PatientController');
    Route::get('/new-patient-today','PatientController@show_new_patients');
    Route::get('/next-appointment-patient','PatientController@show_next_appointment_patient');
    Route::get('/miss-next-appointment-patient','PatientController@show_missing_next_appointment_patient');
    Route::resource('/expense-category','ExpenseCatagoryController');


//// next appointment page
//    Route::get('/next_appointment', function () {
//        return view('next_appointment');
//    });

//
//    Route::get('/ext_income', function () {
//        return view('ext_income');
//    });


//    Route::get('/iframe', function () {
//        return view('iframe');
//    });
//
//    Route::get('/iframe', function () {
//        return view('/iframe');
//    });


//// show all account users
//    Route::get('/account', function () {
//        return view('account');
//    });
//
//// create new users
//    Route::get('/create_account', function () {
//        return view('create_account');
//    });

//Back up page
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



    Route::get('/date_report_patient', function () {
        return view('date_report_patient');
    });

    Route::get('/patient_history_print', function () {
        return view('patient.patient_history_print');
    });

    Route::get('/next_appointment_list', function () {
        return view('next_appointment_list');
    });


    Route::get('/dash_reception', function () {
        return view('reception.dash_reception');
    });

    Route::get('/doctor_report_list', function () {

        return view('/doctor_report_list');
    });

    Route::get('/dash_doctor', function () {
        return view('/dash_doctor');
    });

    Route::get('/pdf', 'PdfGenerator@PDF');

//doctor salary
    Route::get('/doctors2', 'DoctorController@show');

//    Patient Deletion
    Route::get('/patient/{id}/delete', 'PatientController@destroy');

// Doctor Registrationexp
    Route::resource('doctors', 'DoctorController');
//    Route::get('/doctorregister','DoctorController@create');
    Route::get('expense_form', function () {
        $capital=DB::table('expenses')->sum('amount');
        return view('expense_form')->with('capital',$capital);
    });
    Route::resource('/expenditure', 'ExpenseController');
    Route::get('expenditure2/{id}', 'ExpenseController@destroy');
    Route::post('/expenditure3','ExpenseController@FromDash');


// report patient
    Route::resource('/patient_report', 'patientReportController');
    Route::get('patient_report2/{id}', 'patientReportController@report');


// Doctor Registration
    Route::resource('/doctors', 'DoctorController');




//Xray Controller
    Route::resource('xray', 'XrayController');

//Treatment controller
    Route::resource('/treat', 'TreatmentController');

    Route::resource('/operation', 'TreatmentController');

    Route::get('/operation/create/{id}', 'TreatmentController@create');
    Route::get('/operation/{id}/edit/{patient_id}', 'TreatmentController@edit_treatment');


//Other Income Route
    Route::resource('other', 'OincomController');
    Route::get('/other2','OincomController@create');


//route for income

    Route::resource('income', 'IncomeController');
    Route::get('income2', "incomeController@show");
    Route::patch('income3/{id}', 'incomeController@editPaid');

//route for xray income



    Route::resource('xrey_income', 'xrayincomeController');
    Route::get('xrey_income2', 'xrayincomeController@showComplete');

    Route::patch('xrey_income3/{id}', 'xrayincomeController@update2');
// Financial report daily
    Route::resource('/finance_report_income', 'FinanceReportIncomeController');
//financial report income daily report range
    Route::get('finance_report_income2', 'FinanceReportIncomeController@rangeDay');
//financial report income select type single
    Route::get('finance_report_income3', 'FinanceReportIncomeController@selectType');


    //financial report income select type and range
    Route::get('finance_report_income4', 'FinanceReportIncomeController@selectRange');



    //financial report expense
    Route::get('/finance_report_expenses', 'FinanceReportExpenseController@show');
    //financial report expense single date
    Route::get('/finance_report_expenses1', 'FinanceReportExpenseController@showSingle');
    //financial report expenses range day
    Route::get('/finance_report_expenses2', 'FinanceReportExpenseController@showRangeDay');
    //financial report expense single day select type
    Route::get('/finance_report_expenses3', 'FinanceReportExpenseController@singleDaySelect');
    //financial report expense select type range day
    Route::get('/finance_report_expenses4', 'FinanceReportExpenseController@RangeDaySelect');
    //financial report income select type and range
    Route::get('finance_report_income4', 'FinanceReportIncomeController@selectRange');
    //financial report profit
    Route::get('/finance_report_profit','FinanceReportProfitController@show');
    //financial report profit single day report
    Route::get('finance_report_profit1','FinanceReportProfitController@showSingle');
    //financial report profit range day
    Route::get('finance_report_profit2','FinanceReportProfitController@rangeDay');


    Route::resource('xrey_income', 'xrayincomeController');
    Route::get('xrey_income2', 'xrayincomeController@showComplete');

    Route::patch('xrey_income3/{id}', 'xrayincomeController@update2');
// Financial report daily
    Route::resource('/finance_report_income', 'FinanceReportIncomeController');
//financial report income daily report range
    Route::get('finance_report_income2', 'FinanceReportIncomeController@rangeDay');
//financial report income select type single
    Route::get('finance_report_income3', 'FinanceReportIncomeController@selectType');


    //financial report income select type and range
    Route::get('finance_report_income4', 'FinanceReportIncomeController@selectRange');



    //financial report expense
    Route::get('/finance_report_expenses', 'FinanceReportExpenseController@show');
    //financial report expense single date
    Route::get('/finance_report_expenses1', 'FinanceReportExpenseController@showSingle');
    //financial report expenses range day
    Route::get('/finance_report_expenses2', 'FinanceReportExpenseController@showRangeDay');
    //financial report expense single day select type
    Route::get('/finance_report_expenses3', 'FinanceReportExpenseController@singleDaySelect');
    //financial report expense select type range day
    Route::get('/finance_report_expenses4', 'FinanceReportExpenseController@RangeDaySelect');
    //financial report income select type and range
    Route::get('finance_report_income4', 'FinanceReportIncomeController@selectRange');
    //financial report profit
    Route::get('/finance_report_profit','FinanceReportProfitController@show');
    //financial report profit single day report
    Route::get('finance_report_profit1','FinanceReportProfitController@showSingle');
    //financial report profit range day
    Route::get('finance_report_profit2','FinanceReportProfitController@rangeDay');




    Route::resource('xrey_income', 'xrayincomeController');
    Route::get('xrey_income2', 'xrayincomeController@showComplete');


    Route::resource('/account', 'UserController');

    Route::get('/patient/{id}','PatientController@index');

//    Route::get('/patient/date/{$id}','PatientController@indexShowNextDay');

//    Route::get('/patient/preday/{id}','PatientController@indexShowPreDay');
    //route for medicine
    Route::resource('medicine','MedicineController');
    //route for delet medicine
    Route::get('medicine2/{id}','MedicineController@delete');

    //route for prescription
    Route::resource('prescription','PrescriptionController');

});








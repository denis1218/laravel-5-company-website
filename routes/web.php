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

Route::get('/dash', 'HomeController@index')->name('home');

//Language Route
Route::post('language',array(
   'Middleware' => 'LanguageSwitcher',
    'uses'=>'LanguageController@index'
));

//Route Group & Middleware for Admin
Route::middleware('auth','admin')->group(function () {

    Route::resource('/patient', 'PatientController');


    Route::get('/new-patient-today', 'PatientController@show_new_patients');

    Route::get('/next-appointment-patient', 'PatientController@show_next_appointment_patient');

    Route::get('/miss-next-appointment-patient', 'PatientController@show_missing_next_appointment_patient');

    Route::get('/dash_reception', function () {
        return view('reception.dash_reception');
    });

    Route::resource('/expense-category', 'ExpenseCatagoryController');

    Route::get('/employee', function () {
        return view('/employee');
    });

// report doctors
    Route::get('/doctor_report', function () {
        return view('doctor_report');
    });
// Financial report
    Route::get('/finance_report', function () {
        return view('finance_report');
    });
// report docors
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

    Route::get('/doctor_report_list', function () {


        return view('/doctor_report_list');
    });
});
// End Route Admin


// Route Group & Middleware for doctor
Route::middleware('auth','doctor')->group(function () {

    Route::resource('/dental-defect-list','DentalDefectListController');

    Route::resource('/treatment-list','TreatmentListController');

    Route::get('/dash_doctor',function (){
        return view('dash_doctor');
    });
    Route::get('dash_doctor','HomeController@index2');
    //Treatment controller
    Route::resource('/treat', 'TreatmentController');

    Route::resource('/operation', 'TreatmentController');

    Route::get('/operation/create/{id}', 'TreatmentController@create');

    Route::get('/operation/{id}/edit/{patient_id}', 'TreatmentController@edit_treatment');

    Route::resource('medicine','MedicineController');
    //route for delet medicine
    Route::get('medicine2/{id}','MedicineController@delete');
    //route for prescription
    Route::resource('prescription','PrescriptionController');
});
// End Route Doctor


// Route Group & Middleware for reception
Route::middleware('auth','reception')->group(function () {

    Route::get('/dash_reception', 'HomeController@index3');

    Route::resource('/patient', 'PatientController');

    Route::get('/new-patient-today','PatientController@show_new_patients');

    Route::get('/next-appointment-patient','PatientController@show_next_appointment_patient');

    Route::get('/miss-next-appointment-patient','PatientController@show_missing_next_appointment_patient');

    Route::get('/dash_reception', function () {
        return view('reception.dash_reception');
    });

    Route::resource('/expense-category','ExpenseCatagoryController');

    Route::get('/employee', function () {
        return view('/employee');
    });

//    Route::get('/dash', 'HomeController@index')->name('home');
// report doctors
    Route::get('/doctor_report', function () {
        return view('doctor_report');
    });
// Financial report
    Route::get('/finance_report', function () {
        return view('finance_report');
    });
// report docors
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

    Route::get('/doctor_report_list', function () {

        return view('/doctor_report_list');
    });

    Route::get('expense_form', function () {
        $capital=DB::table('expenses')->sum('amount');
        return view('expense_form')->with('capital',$capital);
    });

    Route::get('/pdf', 'PdfGenerator@PDF');
//doctor salary
    Route::get('/doctors2', 'DoctorController@show');
//    Patient Deletion
    Route::get('/patient/{id}/delete', 'PatientController@destroy');
// Doctor Registrationexp
    Route::resource('doctors', 'DoctorController');

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
//Other Income Route
    Route::resource('other', 'OincomController');

    Route::get('/other2','OincomController@create');

    Route::resource('income', 'IncomeController');

    Route::get('income2', "incomeController@show");

    Route::patch('income3/{id}', 'incomeController@editPaid');

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

    Route::get('/patient/{id}','PatientController@index');

});
// End Route Reception












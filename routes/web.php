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

use Carbon\Carbon;

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/', 'HomeController@index')->name('home');
//Language Route
Route::post('language',array(
   'Middleware' => 'LanguageSwitcher',
    'uses'=>'LanguageController@index'
));

Route::middleware('auth','admin')->group(function (){

    Route::get('/patient-deleted','DeletedRecordsController@patient');
    Route::get('/doctor-deleted','DeletedRecordsController@doctor');
    Route::get('/expense-deleted','DeletedRecordsController@expense');
    Route::get('/user-deleted','DeletedRecordsController@user');
    Route::get('/patient-deleted/{id}','DeletedRecordsController@restorePatient');
    Route::get('/doctor-deleted/{id}','DeletedRecordsController@restoreDoctor');
    Route::get('/expense-deleted/{id}','DeletedRecordsController@restoreExpense');
    Route::get('/user-deleted/{id}','DeletedRecordsController@restoreUser');

});

// Route Group & Middleware for doctor
Route::middleware('auth','doctor')->group(function () {

    Route::resource('/dental-defect-list','DentalDefectListController');

    Route::resource('/treatment-list','TreatmentListController');

    Route::get('dash_doctor','HomeController@doctor_dashboard');
    //Treatment controller
    Route::resource('/treat', 'TreatmentController');

    Route::resource('/operation', 'TreatmentController');

    Route::get('/next_appointment_list', 'TreatmentController@next_appointment_list');

    Route::get('/operation/create/{id}', 'TreatmentController@create');

    Route::get('/operation/{id}/edit/{patient_id}', 'TreatmentController@edit_treatment');

    Route::resource('/medicine','MedicineController');
    Route::get('/medicine2','MedicineController@show');
    Route::resource('medicine_category','MedicineCategoryController');
    //route for delet medicine
    Route::get('medicine2/{id}','MedicineController@delete');
    //route for prescription
    Route::resource('prescription','PrescriptionController');
    // show email forms
    Route::get('/contact','EmailController@index');
    // sending email
    Route::post('/email-send','EmailController@email_send');
    // update system and redirect -> back
    Route::get('/update-system','HomeController@updateSystem');
    // about software company paypol and denta
    Route::get('/about-us','HomeController@about_us');
});
// End Route Doctor
Route::middleware('auth','xray')->group(function (){
    Route::resource('xray', 'XrayController');

});
// Route Group & Middleware for reception
Route::middleware('auth','reception')->group(function () {

    Route::get('/dash_reception', 'HomeController@reception');

    Route::resource('/patient', 'PatientController');
    Route::post('/patient/storeFromDash','PatientController@storeFromDash');
    Route::get('/new-patient-today','PatientController@show_new_patients');

    Route::get('/next-appointment-patient','PatientController@show_next_appointment_patient');
    Route::patch('next-appointment-patient-edit/{id}','PatientController@updateNextappointmentPatient');
    Route::get('/miss-next-appointment-patient','PatientController@show_missing_next_appointment_patient');

//    Route::get('/dash_reception', function () {
//        return view('reception.dash_reception');
//    });

    Route::resource('/expense-category','ExpenseCatagoryController');

//    Route::get('/employee', function () {
//        return view('/employee');
//    });

    Route::get('/dash', 'HomeController@index')->name('home');
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
    Route::patch('/doctors3/{id}', 'DoctorController@PayAdvance');

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

//Other Income Route
    Route::resource('other-income', 'OincomController');

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

    Route::resource('/doctor-department','DoctorDepartmentController');

//    User Route
    Route::resource('/user','UserController');
    Route::get('/user2/{id}','UserController@delete');
//    backup route
    Route::get('/backup',function (){
        return view('create_backups');
    });

// Help Route
    Route::get('/help',function (){
       return view('help');
    });

    Route::get('/doctors/doctor_edit/{id}','DoctorController@doctor_edit');

    Route::post('/doctors/update/{id}','DoctorController@update_doctor');

//    Traders Route
    Route::resource('/trader','TraderController');
    Route::get('/common','TraderController@itemTrader');
//    Item Route
    Route::resource('/item','ItemController');
    Route::get('/item2/{id}','ItemController@create');

//    Loan Routes
    Route::resource('/loan','LoanController');
    Route::get('/loan1/{id}','LoanController@create');

//    Teeth Shade Route
    Route::resource('/teeth-shade','TeethShadeController');

    //    Teeth cover Route
    Route::resource('/teeth-cover','TeethCoverTypeController');


    Route::post('/patient_report/search','patientReportController@search_patient');

    Route::resource('/medicine','MedicineController');
    //route for delet medicine
    Route::get('medicine2/{id}','MedicineController@delete');
    //route for prescription
    Route::resource('prescription','PrescriptionController');
    // show email forms
    Route::get('/contact','EmailController@index');
    // sending email
    Route::post('/email-send','EmailController@email_send');
    // update system and redirect -> back
    Route::get('/update-system','HomeController@updateSystem');
    // about software company paypol and denta
    Route::get('/about-us','HomeController@about_us');

    Route::resource('/dental-defect-list','DentalDefectListController');

    Route::resource('/treatment-list','TreatmentListController');

    Route::get('/logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

    Route::resource('employee','EmployeeController');

    Route::get('/pay_salary','PaySalaryController@index');

    Route::post('/pay_salary2','PaySalaryController@showPayment');
    Route::post('/pay_salary3','PaySalaryController@PaySalary3');


    Route::resource('/pay_salary1','PaySalaryController');

    Route::resource('/outdated_patient','OutdatedPatientController');
    Route::post('/outdated_patient/search_user','OutdatedPatientController@search');
    Route::post('/outdated_patient/receive/{id}','OutdatedPatientController@receive_fee');

});
Route::get('/showexpair',function (){
    return view('showexpair');
});
// End Route Reception










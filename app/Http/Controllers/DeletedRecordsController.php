<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Expense;
use App\Income;
use App\Patient;
use App\Treatment;
use App\TreatmentList;
use App\User;
use Illuminate\Http\Request;

class DeletedRecordsController extends Controller
{

    /*
     * show tables deleted
     */
    public function patient()
    {
        $patientDeleted = Patient::onlyTrashed()->paginate(20);
        return view('deleted_records.patient_deleted',compact('patientDeleted'));
    }

    public function restorePatient($id)
    {
        Patient::withTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function doctor()
    {
        $doctorDeleted = Doctor::onlyTrashed()->paginate(20);
        return view('deleted_records.doctor_deleted',compact('doctorDeleted'));
    }

    public function restoreDoctor($id)
    {
        Doctor::withTrashed(    )->find($id)->restore();
        return redirect()->back();
    }

    public function treatment()
    {
        $treatmentDeleted = Treatment::onlyTrashed()->paginate(20);
        return $treatmentDeleted;
    }



    public function expense()
    {
        $expenseDeleted = Expense::onlyTrashed()->paginate(20);
        return view('deleted_records.expense_deleted',compact('expenseDeleted'));
    }

    public function restoreExpense($id)
    {
        Expense::withTrashed()->find($id)->restore();
        return redirect()->back();
    }

    public function user()
    {
        $userDeleted = User::onlyTrashed()->paginate(20);
        return view('deleted_records.user_deleted',compact('userDeleted'));
    }

    public function restoreUser($id)
    {
        User::withTrashed()->find($id)->restore();
        return redirect()->back();
    }




}

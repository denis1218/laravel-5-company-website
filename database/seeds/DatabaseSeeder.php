<?php

use App\Doctor;
use App\Expense;
use App\ExpenseCatagory;
use App\Patient;
use App\Treatment;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

//        if(UserTableSeeder::count() == 0)$this->call(UserTableSeeder::class );
//        if(\App\Doctor::count() == 0)$this->call(DoctorSeeder::class );

        DB::Table('users')->insert([
            'firstname' => 'admin',
            'lastname' => 'admin',
            'password' => Hash::make('123456'),
            'email' => 'admin@gmail.com',
            'department' => 'admin',
        ]);


//        if(Patient::count() == 0)$this->call(PatientTableSeeder::class );
//        if(Treatment::count() == 0)$this->call(TreatmentTableSeeder::class );
////        if(Permission::count() == 0)$this->call(PermissionTableSeeder::class );
//        if(Expense::count() == 0)$this->call(ExpenseTableSeeder::class );
////        if(Role::count() == 0)$this->call(RoleTableSeeder::class );
//        if(ExpenseCatagory::count() == 0)$this->call(TreatmentListTableSeeder::class );
////        $this->call(UserRoleTableSeeder::class);


//
//        DB::table('treatment_lists')->insert([
//            'treatment' => 'PF Parmanent Filling',
//            'estimated_fee' => 15000,
//        ]);
//
//        DB::table('treatment_lists')->insert([
//            'treatment' => 'RCT Root Canal',
//            'estimated_fee' => 1200,
//        ]);
//
//        DB::table('treatment_lists')->insert([
//            'treatment' => 'Extraction',
//            'estimated_fee' => 1300,
//        ]);
//
//        DB::table('treatment_lists')->insert([
//            'treatment' => 'Pulpotomy',
//            'estimated_fee' => 1300,
//        ]);
//
//        DB::table('dental_defect_lists')->insert([
//            'dental_defect' => 'BDR',
//        ]);
//
//        DB::table('dental_defect_lists')->insert([
//            'dental_defect' => 'G-Carios',
//        ]);
//
//        DB::table('dental_defect_lists')->insert([
//            'dental_defect' => 'Atrision',
//        ]);

    }
}



class ExpenseTableSeeder extends Seeder
{
    public function run()
    {
        factory(Expense::class, 20)->create();
    }
}

class PatientTableSeeder extends Seeder
{
    public function run()
    {
        factory(Patient::class, 10)->create();
    }
}

class TreatmentListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('expense_catagories')->insert([
            'category' => 'rent',
        ]);
        DB::table('expense_catagories')->insert([
            'category' => 'office supply',
        ]);
        DB::table('expense_catagories')->insert([
            'category' => 'salary',
        ]);
        DB::table('expense_catagories')->insert([
            'category' => 'other expense',
        ]);
        DB::table('expense_catagories')->insert([
            'category' => 'personal',
        ]);
        DB::table('expense_catagories')->insert([
            'category' => 'tax',
        ]);
        DB::table('expense_catagories')->insert([
            'category' => 'paid loan',
        ]);


    }
}


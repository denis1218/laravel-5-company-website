<?php

use App\Doctor;
use App\Expense;
use App\ExpenseCatagory;
use App\Patient;
use App\Treatment;
use App\TreatmentList;
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
//        if(Underscore\.::count() == 0)$this->call(UserTableSeeder::class );
        if(\App\Doctor::count() == 0)$this->call(DoctorSeeder::class );
        if(TreatmentList::count() == 0)$this->call(TreatmentListTableSeeder::class );
        if(\App\DentalDefectList::count() == 0)$this->call(DentalDefectListTableSeeder::class );
        if(\App\DoctorDepartment::count() == 0)$this->call(DoctorDepartmentTableSeeder::class );
        if(\App\ExpenseCatagory::count() == 0)$this->call(ExpenseCategoryTableSeeder::class );
        if(\App\TeethCoverType::count() == 0)$this->call(TeethCoverTableSeeder::class );


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
//        if(Role::count() == 0)$this->call(RoleTableSeeder::class );
//        $this->call(UserRoleTableSeeder::class);
    }
}

class DentalDefectListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'BDR',
        ]);

        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'G-Carios',
        ]);

        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'Atrision',
        ]);

        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'Calculus',
        ]);
    }
}


class TeethCoverTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('teeth_cover_types')->insert([
            'type' => 'Porcelain',
            'price' => '1500',
        ]);

        DB::table('teeth_cover_types')->insert([
            'type' => 'Metal',
            'price' => '2000',
        ]);

        DB::table('teeth_cover_types')->insert([
            'type' => 'Progold',
            'price' => '2500',
        ]);

        DB::table('teeth_cover_types')->insert([
            'type' => 'Zarqonia',
            'price' => '3500',
        ]);
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

class ExpenseCategoryTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('expense_catagories')->insert([
            'category' => 'rent',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'clinic supply',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'Food',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'owner Clinic',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'owner Clinic',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'tax',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'salary',
        ]);

        DB::table('expense_catagories')->insert([
            'category' => 'paid loan',
        ]);

    }
}

class DoctorDepartmentTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('doctor_departments')->insert([
            'department' => 'General Dental',
        ]);

        DB::table('doctor_departments')->insert([
            'department' => 'Orthodontist',
        ]);

        DB::table('doctor_departments')->insert([
            'department' => 'Oral and mixillofacial surgeon',
        ]);

        DB::table('doctor_departments')->insert([
            'department' => 'Periodontist',
        ]);

        DB::table('doctor_departments')->insert([
            'department' => 'Prosthodontist',
        ]);

        DB::table('doctor_departments')->insert([
            'department' => 'Endodontist',
        ]);
    }
}

class TreatmentListTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('treatment_lists')->insert([
            'treatment' => 'PF Parmanent Filling',
            'estimated_fee' => 15000,
            'color' => 15000,
        ]);

        DB::table('treatment_lists')->insert([
            'treatment' => 'RCT Root Canal',
            'estimated_fee' => 1200,
        ]);

        DB::table('treatment_lists')->insert([
            'treatment' => 'Extraction',
            'estimated_fee' => 1300,
        ]);

        DB::table('treatment_lists')->insert([
            'treatment' => 'Pulpotomy',
            'estimated_fee' => 1300,
        ]);
    }
}


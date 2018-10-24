<?php

use App\Doctor;
use App\Expense;
use App\Patient;
use App\Treatment;
use Illuminate\Database\Seeder;
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

//        if(UserTableSeeder::countt() == 0)$this->call(UserTableSeeder::class );
        if(\App\Doctor::count() == 0)$this->call(DoctorTableSeeder::class );

        DB::Table('users')->insert([
            'firstname' => 'jawad',
            'lastname' => 'mohammadi',
            'password' => Hash::make('123456'),
            'email' => 'jawad@gmail.com',
<<<<<<< HEAD
            'department' => 'doctor',

=======
            'department' => 'admin',
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '25',
            'address' => 'Kabul, Afghanistan',
            'doctor_id' => 3,
>>>>>>> 17b3d9746c08b7cdc6944c90c4216797a9c81a12
        ]);

        DB::Table('users')->insert([
            'firstname' => 'mahdi',
            'lastname' => 'safari',
            'password' => Hash::make('123456'),
            'email' => 'mahdi@gmail.com',
<<<<<<< HEAD
            'department' => 'doctor',
=======
            'department' => 'admin',
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '24',
            'address' => 'Kabul, Afghanistan',
            'doctor_id' => 2,
>>>>>>> 17b3d9746c08b7cdc6944c90c4216797a9c81a12
        ]);

        DB::Table('users')->insert([
            'firstname' => 'haidar',
            'lastname' => 'alami',
            'password' => Hash::make('123456'),
            'email' => 'haidar@gmail.com',
            'department' => 'admin',
<<<<<<< HEAD

        ]);
        DB::Table('users')->insert([
            'firstname' => 'ahmad',
            'lastname' => 'ahmadi',
            'password' => Hash::make('123456'),
            'email' => 'ahmad@gmail.com',
            'department' => 'reception',

=======
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '22',
            'address' => 'Kabul, Afghanistan',
            'doctor_id' => 1,
>>>>>>> 17b3d9746c08b7cdc6944c90c4216797a9c81a12
        ]);

        if(Patient::count() == 0)$this->call(PatientTableSeeder::class );
        if(Treatment::count() == 0)$this->call(TreatmentTableSeeder::class );
        if(Permission::count() == 0)$this->call(PermissionTableSeeder::class );
        if(Expense::count() == 0)$this->call(ExpenseTableSeeder::class );
        if(Role::count() == 0)$this->call(RoleTableSeeder::class );
        $this->call(UserRoleTableSeeder::class);



        DB::table('treatment_lists')->insert([
            'treatment' => 'PF Parmanent Filling',
            'estimated_fee' => 15000,
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

        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'BDR',
        ]);

        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'G-Carios',
        ]);

        DB::table('dental_defect_lists')->insert([
            'dental_defect' => 'Atrision',
        ]);

    }
}

class DoctorTableSeeder extends Seeder
{
    public function run()
    {
        factory(Doctor::class, 3)->create();
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


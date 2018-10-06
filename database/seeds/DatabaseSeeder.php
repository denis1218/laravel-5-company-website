<?php

use App\Doctor;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        if(\App\Doctor::count() == 0)$this->call(DoctorTableSeeder::class );
        if(\App\Patient::count() == 0)$this->call(PatientTableSeeder::class );

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
<<<<<<< HEAD

        DB::table('users')->insert([
            'firstname' => 'mahdi',
            'lastname' => 'safari',
            'username' => 'mahdi@safariAdmin',
            'password' => '123456',
            'email' => 'mahdi@gmail.com',
            'department' => 'Doctor',
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '24',
            'address' => 'Kabul, Afghanistan',
        ]);
=======
>>>>>>> d2a7c38058f1f61e9ed9697b06758e37e16d9d13
    }
}

class DoctorTableSeeder extends Seeder
{
    public function run()
    {
        factory(Doctor::class, 3)->create();
    }
}

class PatientTableSeeder extends Seeder
{
    public function run()
    {
        factory(\App\Patient::class, 10)->create();
    }
}


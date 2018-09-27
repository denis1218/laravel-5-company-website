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

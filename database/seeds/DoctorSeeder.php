<?php

use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{
    public function run()
    {
        DB::table('doctors')->insert([
            'first_name' => 'Wahid',
            'last_name' => 'Qasimi',
            'father_name' => 'Ghollami',
            'age' => '23',
            'phone' => '07803266958',
            'department' => 'Orthodontist',
            'gender' => 'male',
            'salary_amount' => '15000',
            'max_patient' => '10',
        ]);
        DB::table('doctors')->insert([
            'first_name' => 'Mohammad',
            'last_name' => 'Rahmani',
            'father_name' => 'Sarvari',
            'age' => '23',
            'phone' => '0780325568',
            'department' => 'regular Basis',
            'gender' => 'male',
            'salary_amount' => '50',
            'max_patient' => '10',
        ]);
        DB::table('doctors')->insert([
            'first_name' => 'Khalid',
            'last_name' => 'Danish',
            'father_name' => 'Akbar',
            'age' => '23',
            'phone' => '0799015145',
            'department' => 'Periodotist',
            'gender' => 'male',
            'salary_amount' => '20000',
            'max_patient' => '10',
        ]);
    }
}

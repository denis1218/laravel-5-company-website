<?php

use App\Doctor;
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
        DB::Table('users')->insert([
            'firstname' => 'jawad',
            'lastname' => 'mohammadi',
            'username' => 'jawadFB',
            'password' => Hash::make('123456'),
            'email' => 'jawad@gmail.com',
            'department' => 'doctor',
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '25',
            'address' => 'Kabul, Afghanistan',
        ]);

        DB::Table('users')->insert([
            'firstname' => 'mahdi',
            'lastname' => 'safari',
            'username' => 'admin',
            'password' => Hash::make('123456'),
            'email' => 'mahdi@gmail.com',
            'department' => 'doctor',
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '24',
            'address' => 'Kabul, Afghanistan',
        ]);

        DB::Table('users')->insert([
            'firstname' => 'haidar',
            'lastname' => 'alami',
            'username' => 'user',
            'password' => Hash::make('123456'),
            'email' => 'haidar@gmail.com',
            'department' => 'reception',
            'phone' => '0790424144',
            'gender' => 'male',
            'role' => 'Owner',
            'age' => '22',
            'address' => 'Kabul, Afghanistan',
        ]);
//        if(UserTableSeeder::countt() == 0)$this->call(UserTableSeeder::class );
        if(\App\Doctor::count() == 0)$this->call(DoctorTableSeeder::class );
        if(Patient::count() == 0)$this->call(PatientTableSeeder::class );
        if(Treatment::count() == 0)$this->call(TreatmentTableSeeder::class );
        if(Permission::count() == 0)$this->call(PermissionTableSeeder::class );
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

class PatientTableSeeder extends Seeder
{
    public function run()
    {
        factory(Patient::class, 10)->create();
    }
}


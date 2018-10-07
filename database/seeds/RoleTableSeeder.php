<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Role Admin
        $admin = Role::create([
            'name' => 'admin'
        ]);
        // set all permission into Admin
        $admin->givePermissionTo(Permission::all());

        // Role doctor
        $doctor = Role::create([
            'name' => 'doctor'
        ]);
        // set update, delete, create permission into doctor
        $doctor->givePermissionTo(['create','edit','delete','view']);

        // Role reception
        $reception = Role::create([
            'name' => 'reception'
        ]);
        // set update, delete, create permission into reception
        $reception->givePermissionTo(['create','edit','delete','view']);

        // Role Guest
        $guest = Role::create([
            'name' => 'guest'
        ]);
        // set permission into guest
        $guest->givePermissionTo(['view']);
    }
}

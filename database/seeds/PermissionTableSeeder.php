<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // create record
        Permission::create([
            'name' => 'create',
            'display_name' => 'Create Record'
        ]);

        // edit record
        Permission::create([
            'name' => 'edit',
            'display_name' => 'Edit Record'
        ]);

        // delete record
        Permission::create([
            'name' => 'delete',
            'display_name' => 'Delete Record'
        ]);


        // view record
        Permission::create([
            'name' => 'view',
            'display_name' => 'View Record'
        ]);


    }
}

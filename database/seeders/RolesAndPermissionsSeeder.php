<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;



class RolesAndPermissionsSeeder  extends Seeder

{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // create permissions
        Permission::create(['name' => 'create post']);
        Permission::create(['name' => 'edit post']);
        Permission::create(['name' => 'delete post']);
        Permission::create(['name' => 'create sale']);
        Permission::create(['name' => 'edit sale']);
        Permission::create(['name' => 'delete posts']);
        Permission::create(['name' => 'create delivery']);
        Permission::create(['name' => 'edit delivery']);
        Permission::create(['name' => 'delete delivery']);


        // create roles and assign created permissions
        $role = Role::create(['name' => 'Super-Admin']);
        $role->givePermissionTo(Permission::all());
    }

}
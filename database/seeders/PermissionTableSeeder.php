<?php

  
namespace Database\Seeders;

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

        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'posts-list',
           'posts-create',
           'posts-edit',
           'posts-delete',
        ];

     

        foreach ($permissions as $permission) {

             Permission::create(['name' => $permission]);

        }

    }

}
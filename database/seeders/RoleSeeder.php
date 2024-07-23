<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $superAdminRole = Role::create(['name' => 'Super Admin']);
        $permissions = Permission::pluck('id','id')->all();
        $superAdminRole->syncPermissions($permissions);

        $admin = Role::create(['name' => 'Admin']);
        $admin->givePermissionTo([

            // users
            'user-list',
            'user-create',
            'user-show',
            'user-edit',
            'user-delete',

            // products
            'product-list',
            'product-create',
            'product-show',
            'product-edit',
            'product-delete',

            // contact
            'contact-list',
            'contact-create',
            'contact-show',
            'contact-edit',
            'contact-delete',

        ]);

        $teacher = Role::create(['name' => 'Teacher']);
        $teacher->givePermissionTo([
            // products
            'product-list',
            'product-create',
            'product-show',
            'product-edit',
            'product-delete'
        ]);


        $student = Role::create(['name' => 'Student']);
        $student->givePermissionTo([
            // products
            'product-list',
            'product-show',

            // contact
            'contact-create',
        ]);

        $user = Role::create(['name' => 'User']);

    }
}

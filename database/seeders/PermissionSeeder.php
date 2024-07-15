<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [

            // users
            'user-list',
            'user-create',
            'user-show',
            'user-edit',
            'user-delete',

            // roles
            'role-list',
            'role-create',
            'role-show',
            'role-edit',
            'role-delete',

            // products
            'product-list',
            'product-create',
            'product-show',
            'product-edit',
            'product-delete',

            // languages
            'language-list',
            'language-create',
            'language-show',
            'language-edit',
            'language-delete',

        ];
         
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

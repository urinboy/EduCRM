<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            // roles
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            // users
            'user-list',
            'user-create',
            'user-edit',
            'user-delete',
            // products
            'product-list',
            'product-create',
            'product-edit',
            'product-delete'
        ];
         
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

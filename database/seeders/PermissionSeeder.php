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
            'user-edit',
            'user-delete',

            // roles
            'role-list',
            'role-create',
            'role-edit',
            'role-delete',
            
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

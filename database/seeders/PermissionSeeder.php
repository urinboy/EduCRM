<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
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

            // cities
            'city-list',
            'city-create',
            'city-show',
            'city-edit',
            'city-delete',

            // organizations
            'organization-list',
            'organization-create',
            'organization-show',
            'organization-edit',
            'organization-delete',

            // currencies
            'currency-list',
            'currency-create',
            'currency-show',
            'currency-edit',
            'currency-delete',

            // contact
            'contact-list',
            'contact-create',
            'contact-show',
            'contact-edit',
            'contact-delete',

            // address
            'address-list',
            'address-create',
            'address-show',
            'address-edit',
            'address-delete',

            // address
            'category-list',
            'category-create',
            'category-show',
            'category-edit',
            'category-delete',

        ];
         
        foreach ($permissions as $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}

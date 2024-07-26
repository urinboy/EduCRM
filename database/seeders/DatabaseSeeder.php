<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    
    public function run(): void
    {
        // Organization::factory()->count(10)->create();
        
        $this->call([
            PermissionSeeder::class,
            RoleSeeder::class,
            CreateAdminUserSeeder::class,
            LanguageSeeder::class,
            CountrySeeder::class,
            StateSeeder::class,
            CitySeeder::class,
            CurrencySeeder::class,
            AddressSeeder::class,
            OrganizationSeeder::class,
            AccountSeeder::class,
        ]);
    }
}

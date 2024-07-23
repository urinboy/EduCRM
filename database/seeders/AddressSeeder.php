<?php

namespace Database\Seeders;

use App\Models\Address;
use Illuminate\Database\Seeder;

class AddressSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Address::create([
            'country_id' => 1,
            'state_id' => 1,
            'city_id' => 1,
            'district' => 'District A',
            'street' => 'Street A',
            'zip_code' => '10001',
            'detail' => 'Detailed address A',
        ]);

        Address::create([
            'country_id' => 2,
            'state_id' => 2,
            'city_id' => 2,
            'district' => 'District B',
            'street' => 'Street B',
            'zip_code' => '20002',
            'detail' => 'Detailed address B',
        ]);
    }
}

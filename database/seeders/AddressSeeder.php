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
            'country_id' => 234,
            'state_id' => 7,
            'city_id' => 15,
            'district' => 'Keneges OFY',
            'street' => 'Keneges awil 11-uy',
            'zip_code' => '231318',
            'detail' => "Mahalla fuqarolar yig'inidagi boshqaruv bo'limi.",
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

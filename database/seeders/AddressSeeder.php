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
            'street' => 'Keneges awil',
            'zip_code' => '231318',
            'detail' => "Mahalla fuqarolar yig'inidagi boshqaruv bo'limi.",
        ]);

        Address::create([
            'country_id' => 234,
            'state_id' => 7,
            'city_id' => 15,
            'district' => 'Keneges OFY',
            'street' => 'Keneges',
            'zip_code' => '231318',
            'detail' => "Umumiy o'rta talim makrtab",
        ]);
    }
}

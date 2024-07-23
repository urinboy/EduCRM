<?php

namespace Database\Seeders;

use App\Models\Currency;
use Illuminate\Database\Seeder;

class CurrencySeeder extends Seeder
{
    public function run(): void
    {
        $currencies = [
            ['name' => "Bo'lib to'lash", 'code' => 'KREDIT'],
            ['name' => "Qarz Nasiya", 'code' => 'NASIYA'],
            ['name' => "O'zbek so'mi", 'code' => 'UZS'],
            ['name' => 'AQSH dollor', 'code' => 'USD'],
            ['name' => 'Kazak tengesi', 'code' => 'KZT'],
            ['name' => 'Rossiya rubli', 'code' => 'RUB'],
        ];

        foreach ($currencies as $currency) {
            Currency::create($currency);
        }
    }
}

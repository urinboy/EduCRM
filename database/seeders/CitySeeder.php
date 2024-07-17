<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('cities')->delete();
        $cities = array(
            array('name' => "Amudaryo tumani", 'state_id' => 7),
            array('name' => "Beruniy tumani", 'state_id' => 7),
            array('name' => "Bo'zatov tumani", 'state_id' => 7),
            array('name' => "Chimboy tumani", 'state_id' => 7),
            array('name' => "Ellikqal'a tumani", 'state_id' => 7),
            array('name' => "Kegeyli tumani", 'state_id' => 7),
            array('name' => "Mo'ynoq tumani", 'state_id' => 7),
            array('name' => "Nukus tumani", 'state_id' => 7),
            array('name' => "Nukus shahri", 'state_id' => 7),
            array('name' => "Qanliko'l tumani", 'state_id' => 7),
            array('name' => "Qo'ng'irot tumani", 'state_id' => 7),
            array('name' => "Qorao'zak tumani", 'state_id' => 7),
            array('name' => "Shumanay tumani", 'state_id' => 7),
            array('name' => "Taxtako'pir tumani", 'state_id' => 7),
            array('name' => "Taxiatosh tumani", 'state_id' => 7),
            array('name' => "To'rtko'l tumani", 'state_id' => 7),
            array('name' => "Xo'jayli tumani", 'state_id' => 7),
        );
        DB::table('cities')->insert($cities);
    }
}

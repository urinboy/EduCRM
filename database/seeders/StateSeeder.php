<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StateSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('states')->delete();
        $states = array(
            array('name' => "Andijon viloyati", 'country_id' => 234),
            array('name' => "Buxoro viloyati", 'country_id' => 234),
            array('name' => "Farg'ona viloyati", 'country_id' => 234),
            array('name' => "Jizzax viloyati", 'country_id' => 234),
            array('name' => "Namangan viloyati", 'country_id' => 234),
            array('name' => "Navoiy viloyati", 'country_id' => 234),
            array('name' => "Qoraqalpog'iston Respublikasi", 'country_id' => 234),
            array('name' => "Qashqadaryo viloyati", 'country_id' => 234),
            array('name' => "Samarqand viloyati", 'country_id' => 234),
            array('name' => "Sirdaryo viloyati", 'country_id' => 234),
            array('name' => "Surxandaryo viloyati", 'country_id' => 234),
            array('name' => "Xorazm viloyati", 'country_id' => 234),
            array('name' => "Toshkent viloyati", 'country_id' => 234),
            array('name' => "Toshkent shahri", 'country_id' => 234),
        );
        DB::table('states')->insert($states);
    }
}

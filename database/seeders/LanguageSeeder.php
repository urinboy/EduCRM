<?php

namespace Database\Seeders;

use App\Models\Language;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class LanguageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Language::create(['name' => "O'zbek", 'code' => 'uz']);
        Language::create(['name' => 'Qaraqalpaq', 'code' => 'kaa']);
        Language::create(['name' => 'Русский', 'code' => 'ru']);
        Language::create(['name' => 'English', 'code' => 'en']);
    }
}

<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Address;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Organization;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Account::factory()->count(5)->create();

        $user = User::find(1);
        $organization = Organization::find(1);
        $address = Address::find(1);
        $language = Language::find(1);
        $currency = Currency::find(3);

        if (!$user || !$organization || !$address || !$language || !$currency) {
            dd('Foreign key values are not present in the respective tables.', $user->id,$organization->id, $address, $language, $currency);
            // dd();
        }

        Account::create([
            'user_id' => $user->id,
            'photo' => 'photos/urinboydev.png',
            'first_name' => "Urinboy",
            'last_name' => "Tursunboyev",
            'middle_name' => "Odilovich",
            'birthday' => "1996-05-10",
            'gender' => 'male',
            'bio' => "Bio Text",
            'phone' => '+998913731196',
            'organization_id' => $organization->id,
            'address_id' => $address->id,
            'language_id' => $language->id,
            'currency_id' => $currency->id,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

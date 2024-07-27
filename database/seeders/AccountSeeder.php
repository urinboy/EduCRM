<?php

namespace Database\Seeders;

use App\Models\Account;
use App\Models\Address;
use App\Models\Currency;
use App\Models\Language;
use App\Models\Organization;
use App\Models\User;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Account::factory()->count(5)->create();

        $super = User::find(1);
        $superOrganization = Organization::find(1);

        $admin = User::find(2);
        $adminOrganization = Organization::find(1);

        $teacher = User::find(3);
        $teacherOrganization = Organization::find(2);

        $student = User::find(4);
        $studentOrganization = Organization::find(3);

        $user = User::find(5);
        $userOrganization = Organization::find(1);

        $address = Address::find(1);
        $language = Language::find(1);
        $currency = Currency::find(3);

        if (!$super || !$superOrganization || !$admin || !$adminOrganization || !$teacher || !$teacherOrganization || !$student || !$studentOrganization || !$user || !$userOrganization || !$address || !$language || !$currency) {
            dd('Foreign key values are not present in the respective tables.', $super->id, $superOrganization->id, $admin->id, $adminOrganization->id, $teacher->id, $teacherOrganization->id, $student->id, $studentOrganization->id, $user->id, $userOrganization->id, $address, $language, $currency);
            // dd();
        }

        Account::create([
            'user_id' => $super->id,
            'photo' => null,
            'first_name' => "Urinboy",
            'last_name' => "Tursunboyev",
            'middle_name' => "Odilovich",
            'birthday' => "1996-05-10 12:56:16",
            'gender' => 'male',
            'bio' => "Bio Text",
            'phone' => '+998913731196',
            'organization_id' => $superOrganization->id,
            'address_id' => $address->id,
            'language_id' => $language->id,
            'currency_id' => $currency->id,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Account::create([
            'user_id' => $admin->id,
            'photo' => null,
            'first_name' => "Sayt",
            'last_name' => "Admin",
            'middle_name' => null,
            'birthday' => "1996-05-10 12:56:16",
            'gender' => 'male',
            'bio' => "Sayt Admini",
            'phone' => '+998913731196',
            'organization_id' => $adminOrganization->id,
            'address_id' => $address->id,
            'language_id' => $language->id,
            'currency_id' => $currency->id,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Account::create([
            'user_id' => $teacher->id,
            'photo' => null,
            'first_name' => "Aynura",
            'last_name' => "Yeshbayeva",
            'middle_name' => "Azamatovna",
            'birthday' => "2005-06-30 12:56:16",
            'gender' => 'famale',
            'bio' => "Ingliz tili o'qituvchisi",
            'phone' => '+998913731196',
            'organization_id' => $teacherOrganization->id,
            'address_id' => $address->id,
            'language_id' => $language->id,
            'currency_id' => $currency->id,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Account::create([
            'user_id' => $student->id,
            'photo' => null,
            'first_name' => "Student",
            'last_name' => "Talaba",
            'middle_name' => null,
            'birthday' => "2006-11-10 12:56:16",
            'gender' => 'male',
            'bio' => "Student talaba.",
            'phone' => '+998911234567',
            'organization_id' => $studentOrganization->id,
            'address_id' => $address->id,
            'language_id' => $language->id,
            'currency_id' => $currency->id,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        Account::create([
            'user_id' => $user->id,
            'photo' => null,
            'first_name' => "Oddiy",
            'last_name' => "Foydalanuvchi",
            'middle_name' => null,
            'birthday' => "1996-05-10 12:56:16",
            'gender' => 'male',
            'bio' => "Oddiy sayt foydalanuvchisi",
            'phone' => '+998913919191',
            'organization_id' => $userOrganization->id,
            'address_id' => $address->id,
            'language_id' => $language->id,
            'currency_id' => $currency->id,
            'status' => 'active',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}

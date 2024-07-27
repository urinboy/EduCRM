<?php

namespace Database\Seeders;

use App\Models\Organization;
use Illuminate\Database\Seeder;

class OrganizationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Organization::factory()->count(10)->create();

        Organization::create([
            'name' => 'UrinboyDev Inc.',
            'address' => 'Uzbekistan, Republic Karakapakstan, Takhiatash',
            'phone' => '+998(91)373-11-96',
            'email' => 'urinboydev@gmail.com',
            'website' => 'https://www.urinboydev.uz',
        ]);

        Organization::create([
            'name' => "Ingliz tilini o'rganish markazi",
            'address' => 'Taxiatosh tumani (Qoraqalpog’iston Respublikasi)',
            'phone' => '+998 90 707 86 42',
            'email' => 'itom@keneges.uz',
            'website' => 'https://t.me/Yeshbayeva_Aynur',
        ]);

        Organization::create([
            'name' => '16-sonli maktab',
            'address' => 'Taxiatosh tumani (Qoraqalpog’iston Respublikasi)',
            'phone' => '555-234-5678',
            'email' => '16-maktab@keneges.uz',
            'website' => 'https://schools.emaktab.uz/v2/school?school=1000003854426',
        ]);

        Organization::create([
            'name' => '	Taxiatosh 17-sonli umumiy o‘rta ta‘lim maktabi',
            'address' => 'Taxiatosh tumani (Qoraqalpog’iston Respublikasi)',
            'phone' => '+998(99)079-70-22',
            'email' => 'Taxiatosh17maktab@inbox.uz',
            'website' => 'https://schools.emaktab.uz/v2/school?school=1000003854427',
        ]);

        Organization::create([
            'name' => "Taxiatosh tumani 18-sonli umumiy o'rta ta'lim maktabi",
            'address' => '111 Learning Lane, Boston, MA',
            'phone' => '555-456-7890',
            'email' => 'contact@edexcellence.com',
            'website' => 'https://www.edexcellence.com',
        ]);

    }
}

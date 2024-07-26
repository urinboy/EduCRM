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
            'name' => 'Green Energy Solutions',
            'address' => '5678 Eco Park, Austin, TX',
            'phone' => '555-234-5678',
            'email' => 'info@greenenergy.com',
            'website' => 'https://www.greenenergy.com',
        ]);

        Organization::create([
            'name' => 'Healthcare Heroes',
            'address' => '910 Health Blvd, New York, NY',
            'phone' => '555-345-6789',
            'email' => 'support@healthcareheroes.com',
            'website' => 'https://www.healthcareheroes.com',
        ]);

        Organization::create([
            'name' => 'Educational Excellence',
            'address' => '111 Learning Lane, Boston, MA',
            'phone' => '555-456-7890',
            'email' => 'contact@edexcellence.com',
            'website' => 'https://www.edexcellence.com',
        ]);

    }
}

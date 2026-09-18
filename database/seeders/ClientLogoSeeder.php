<?php

namespace Database\Seeders;

use App\Models\ClientLogo;
use Illuminate\Database\Seeder;

class ClientLogoSeeder extends Seeder
{
    public function run(): void
    {
        $names = ['Nexora', 'Vantar Group', 'Brightlane', 'Cakra Industri', 'Meridian Co', 'Pilar Utama', 'Alira Tech'];

        foreach ($names as $i => $name) {
            ClientLogo::create(['name' => $name, 'sort_order' => $i]);
        }
    }
}

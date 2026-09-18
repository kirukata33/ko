<?php

namespace Database\Seeders;

use App\Models\SiteSetting;
use Illuminate\Database\Seeder;

class SiteSettingSeeder extends Seeder
{
    public function run(): void
    {
        SiteSetting::set('contact_email', 'hello@konsit.id');
        SiteSetting::set('contact_phone', '+62 812-0000-0000');
    }
}

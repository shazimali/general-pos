<?php

namespace Modules\Setting\Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Modules\Setting\Entities\Setting;

class SettingDatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Setting::create([
            'company_name' => 'Example Company',
            'company_email' => 'example@company.com',
            'company_phone' => '030000000000',
            'notification_email' => 'notification@test.com',
            'default_currency_id' => 1,
            'default_currency_position' => 'prefix',
            'footer_text' => 'Triangle Pos © 2024 || Developed by <strong><a target="_blank" href="https://aisoft360.com">AI Soft360</a></strong>',
            'company_address' => 'Gujranwala, Pakistan'
        ]);
    }
}

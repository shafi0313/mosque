<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Application Variables
        Setting(['app_name' => env('APP_NAME', 'Mosque')])->save();
        Setting(['app_logo' => 'logo.png'])->save();
        Setting(['app_nav_logo' => 'logo.png'])->save();
        Setting(['app_description' => 'mosque'])->save();
        Setting(['app_keyword' => 'mosque'])->save();
        Setting(['footer_credit' => 'Yahya Gilani'])->save();
        Setting(['footer_credit_link' => '.com'])->save();
        Setting(['facebook' => ''])->save();
        Setting(['youtube' => ''])->save();        
    }
}

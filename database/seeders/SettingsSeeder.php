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
        Setting(['app_name' => 'West Coast Islamic Center'])->save();
        Setting(['app_logo' => 'logo.png'])->save();
        Setting(['app_nav_logo' => 'nav-logo.png'])->save();
        Setting(['app_description' => 'West Coast Islamic Center'])->save();
        Setting(['app_keyword' => 'West Coast Islamic Center'])->save();
        Setting(['footer_credit' => 'Yahya Gilani'])->save();
        Setting(['footer_credit_link' => '.com'])->save();
        Setting(['facebook' => ''])->save();
        Setting(['youtube' => ''])->save();        
    }
}

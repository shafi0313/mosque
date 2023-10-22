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
        $datum = [
            // 'app_name'             => 'West Coast Islamic Center',
            // 'app_logo'             => 'logo.png',
            // 'app_nav_logo'         => 'nav-logo.png',
            // 'app_description'      => 'West Coast Islamic Center',
            // 'app_keyword'          => 'West Coast Islamic Center',
            // 'home_committee_title' => 'West Coast Islamic Center',
            // 'footer_credit'        => 'Yahya Gilani',
            // 'footer_credit_link'   => '.com',
            // 'facebook'             => '',
            // 'youtube'              => '',
            'prayer_time_location' => 'Australia',
            'custom_prayer_time'   => '1',
            'auto_prayer_time'     => '1',
        ];
        Setting($datum)->save();
    }
}

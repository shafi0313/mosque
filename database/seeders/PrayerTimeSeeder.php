<?php

namespace Database\Seeders;

use App\Models\PrayerTime;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PrayerTimeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datum = [
            [
                'name'       => 'Fajr',
                'adhan_time' => '04:41 AM',
                'iqama_time' => '04:41 AM',
            ],
            [
                'name'       => 'Sunrise',
                'adhan_time' => '04:41 AM',
                'iqama_time' => '05:59 AM'
            ],
            [
                'name'       => 'Dhuhr',
                'adhan_time' => '11:43 AM',
                'iqama_time' => '04:41 AM',
            ],
            [
                'name'       => 'Asr',
                'adhan_time' => '03:51 PM',
                'iqama_time' => '04:41 AM',
            ],
            [
                'name'       => 'Sunset',
                'adhan_time' => '05:27 PM',
                'iqama_time' => '04:41 AM',
            ],
            [
                'name'       => 'Maghrib',
                'adhan_time' => '06:57 PM',
                'iqama_time' => '04:41 AM',
            ],
            [
                'name'       => 'Isha',
                'adhan_time' => '06:57 PM',
                'iqama_time' => '04:41 AM',
            ],
            [
                'name'       => 'Midnight',
                'adhan_time' => '11:04 PM',
                'iqama_time' => '04:41 AM',
            ],
        ];
        PrayerTime::insert($datum);
    }
}

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
                'name' => 'Fajr',
                'time' => '04:41 AM'
            ],
            [
                'name' => 'Sunrise',
                'time' => '05:59 AM'
            ],
            [
                'name' => 'Dhuhr',
                'time' => '11:43 AM'
            ],
            [
                'name' => 'Asr',
                'time' => '03:51 PM'
            ],
            [
                'name' => 'Sunset',
                'time' => '05:27 PM'
            ],
            [
                'name' => 'Maghrib',
                'time' => '06:57 PM'
            ],
            [
                'name' => 'Isha',
                'time' => '06:57 PM'
            ],
            [
                'name' => 'Midnight',
                'time' => '11:04 PM'
            ],
        ];
        PrayerTime::insert($datum);
    }
}

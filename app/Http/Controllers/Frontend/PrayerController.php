<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\PrayerTime;
use Illuminate\Http\Request;

class PrayerController extends Controller
{
    public function index()
    {
        if(Setting('custom_prayer_time') == '1'){
            $prayerTimes = PrayerTime::all();
            return view('frontend.prayer', compact('prayerTimes'));
        }
        return view('frontend.prayer');
    }
}

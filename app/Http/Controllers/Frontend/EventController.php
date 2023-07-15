<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\EventDawah;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function upComing()
    {
        $up_coming_events = Event::orderBy('date','DESC')->whereStatus(1)->get();
        return view('frontend.up-coming-event',compact('up_coming_events'));
    }
    public function dawahStalls()
    {
        $event_dawah = EventDawah::first();
        return view('frontend.sawah-stalls',compact('event_dawah'));
    }
}

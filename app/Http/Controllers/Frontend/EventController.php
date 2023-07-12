<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EventController extends Controller
{
    public function upComing()
    {
        $up_coming_events = Event::orderBy('date','DESC')->whereStatus(1)->get();
        return view('frontend.up-coming-event',compact('up_coming_events'));
    }
}

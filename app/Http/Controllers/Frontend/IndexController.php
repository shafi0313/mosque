<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Event;
use App\Models\Slider;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Committee;

class IndexController extends Controller
{
    public function index()
    {
        $data['sliders']    = Slider::whereStatus(1)->get();
        $data['events']     = Event::whereStatus(1)->orderBy('date','DESC')->get();
        $data['committees'] = Committee::whereStatus(1)->get();
        return view('frontend.index', $data);
    }
}

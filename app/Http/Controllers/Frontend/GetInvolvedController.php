<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Donate;
use App\Models\JoinUs;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class GetInvolvedController extends Controller
{
    public function donate()
    {
        $donate = Donate::first();
        return view('frontend.donate', compact('donate'));
    }
    public function joinUs()
    {
        $join_us = JoinUs::first();
        return view('frontend.join-us', compact('join_us'));
    }
}

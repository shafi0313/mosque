<?php

namespace App\Http\Controllers\Frontend;

use App\Models\History;
use App\Models\Committee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function committeeMember()
    {
        $committees = Committee::all();
        return view('frontend.about.committee_member', compact('committees'));
    }
    public function history()
    {
        $history = History::first()->content;
        return view('frontend.about.history', compact('history'));
    }
}

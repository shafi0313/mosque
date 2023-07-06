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
        $committees = Committee::whereIs_present(1)->get();
        return view('frontend.about.committee_member', compact('committees'));
    }
    public function history()
    {
        $history = History::first()->content;
        return view('frontend.about.history', compact('history'));
    }

    public function pastMember()
    {
        $committees = Committee::whereIs_present(0)->get();
        return view('frontend.about.past_member', compact('committees'));
    }
}

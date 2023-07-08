<?php

namespace App\Http\Controllers\Frontend;

use App\Models\History;
use App\Models\Committee;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\PresidentAddress;

class AboutController extends Controller
{
    public function presidentAddress()
    {
        $president_address = PresidentAddress::first()->content;
        return view('frontend.about.president_address', compact('president_address'));
    }
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
        $past_members = Committee::whereIs_present(0)->get();
        return view('frontend.about.past_member', compact('past_members'));
    }
}

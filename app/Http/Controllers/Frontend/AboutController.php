<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Committee;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function committeeMember()
    {
        $committees = Committee::all();
        return view('frontend.about.committee_member', compact('committees'));
    }
}

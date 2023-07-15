<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Models\ParticipantInfo;
use App\Http\Controllers\Controller;

class RemembranceController extends Controller
{
    public function participantInfo()
    {
        $participantInfo = ParticipantInfo::first();
        return view('frontend.participant-info', compact('participantInfo'));
    }
}

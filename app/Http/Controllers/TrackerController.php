<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Tracker;

class TrackerController extends Controller
{
    public function index(Request $request) {

        $user = Auth::user();
        return view('tracker.tracker', [
            'trackers' => Tracker::all()
        ])->with('success', session('success'));

    }
}

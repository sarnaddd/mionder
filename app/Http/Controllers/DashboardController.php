<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index(Request $request) {
        if(Auth::user()->role == 'admin') {
            return view('dashboard.admin');
        } else if(Auth::user()->role == 'dokter'){
            return view('dashboard.doctor');
        } else {
            return view('dashboard.patient');
        }
    }
}

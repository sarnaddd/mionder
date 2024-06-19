<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Tracker;
use Illuminate\Support\Facades\Auth;

class TrackerDashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     return view('tracker.trackerdoctor', [
    //         'trackers' => Tracker::all()
    //     ])->with('success', session('success'));
    // }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('tracker.create'); // Pastikan Anda membuat view ini
    }

    /**
     * Store a newly created resource in storage.
     */
    // public function store(Request $request)
    // {
    //     $user = Auth::user();

    //     $request->validate([
    //         'Tanggal' => 'required|date',
    //         'result' => 'required|string',
    //     ]);

    //     Tracker::create([
    //         'Tanggal' => $request->Tanggal,
    //         'Result' => $request->result,
    //         'Nama_Dokter' => $user->name,
    //     ]);

    //     return redirect()->route('trackerdoctor.index')->with('success', 'Data tracker berhasil disimpan.');
    // }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

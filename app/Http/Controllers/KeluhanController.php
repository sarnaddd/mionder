<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeluhanController extends Controller
{
    public function index(Request $request) {
        $keluhan = Keluhan::where('user_id', Auth::id())->get();
        if(Auth::user()->role == 'admin') {
            return view('keluhan.keluhan',compact('keluhan'));
        } else if (Auth::user()->role == 'dokter'){
            return view('keluhan.keluhandoctor',compact('keluhan'));
        } else {
            $dokter = User::where('role','dokter')->get();
            return view('keluhan.keluhanpatient',compact('keluhan', 'dokter'));
        }
    }

    public function AddKeluhan(Request $request) {
        $request->validate([
            'dokter_id' => 'required|exists:users,id',
        ]);

        Keluhan::create([
            'user_id' => Auth::user()->id,
            'tanggal' => $request->Tanggal,
            'keluhan' => $request->keluhan,
            'dokter_id' => $request->dokter_id,
        ]);

        return redirect('/keluhan');
    }

    public function historyKeluhan(Request $request) {
        $keluhan = Keluhan::where('user_id', Auth::id())->get();
        return view('tracker.tracker',compact('keluhan'));
    }

    public function showKeluhanDoctor(Request $request) {
        $keluhan = Keluhan::where('dokter_id', Auth::id())->get();
        return view('tracker.trackerdoctor',compact('keluhan'));
    }

    public function responseDoctor(Request $request, $id) {
        $request->validate([
            'response' => 'required|string'
        ]);

        $keluhan = Keluhan::findOrFail($id);
        $keluhan->update([
            'response' => $request->response
        ]);

        return redirect('/trackerdoctor');
        // return view('tracker.trackerdoctor',compact('keluhan'));
    }

    public function deleteKeluhan($id)
        {
            $keluhan = Keluhan::findOrFail($id);

            $keluhan->delete();

            return redirect('/keluhan');
        }

}

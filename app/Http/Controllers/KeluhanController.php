<?php

namespace App\Http\Controllers;

use App\Models\Keluhan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class KeluhanController extends Controller
{
    public function index(Request $request) {
        $keluhan = Keluhan::all();
        if(Auth::user()->role == 'admin') {
            return view('keluhan.keluhan',compact('keluhan'));
        } else if (Auth::user()->role == 'dokter'){
            return view('keluhan.keluhandoctor',compact('keluhan'));
        } else {
            return view('keluhan.keluhanpatient',compact('keluhan'));
        }
}
    public function AddKeluhan(Request $request) {
        $user = Auth::user();
        $keluhan = Keluhan::create([
            'Nama_Pasien' =>$user->name ,
            'Tanggal' => $request->Tanggal,
            'Keluhan' => $request->keluhan,
            'Nama_Dokter' => $request->Nama_Dokter,
        ]);

        return redirect('/keluhan');
    }
    public function deleteKeluhan($id)
        {
            $keluhan = Keluhan::findOrFail($id);

            $keluhan->delete();

            return redirect('/keluhan');
        }

}

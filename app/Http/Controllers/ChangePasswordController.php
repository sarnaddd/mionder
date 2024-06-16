<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class ChangePasswordController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();
        return view('password.password', [
            'user' => $user,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

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
    $user = User::find($id);

        $validatedData = $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|min:6|confirmed',
            'new_password_confirmation' => 'required'
        ]);

        if (!Hash::check($validatedData['old_password'], $user->password)) {
            return back()->withErrors(['old_password' => 'The provided password does not match our records.']);
        }

        $user->password = bcrypt($validatedData['new_password']);
        $user->save();

        if (Auth::user()->role == 'admin') {
            return redirect('/changepassword')->with('success', 'Update password berhasil');
        } else if (Auth::user()->role == 'dokter') {
            return redirect('/changepassworddoctor')->with('success', 'Update password berhasil');
        } else {
            return redirect('/changepasswordpatient')->with('success', 'Update password berhasil');
        }
}


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

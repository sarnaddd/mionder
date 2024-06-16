<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index() {
        $users = User::all();
        return view('user.user', compact('users'));
    }
    public function addUser(Request $request) {

        $validatedData = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
            'role' => 'required',
        ]);

        // Hash password before storing
        $validatedData['password'] = Hash::make($request->password);

        User::create($validatedData);

        return redirect('/user')->with('success', 'User has been created');

        // $user = User::create([
        //     'name' => $request->name,
        //     'email' => $request->email,
        //     'username' => $request->username,
        //     'password' => Hash::make($request->password),
        // ]);

    }
    public function updateUser(Request $request, $id)
        {
            $Users = User::findOrFail($id);
            $Users->name = $request->input('name');
            $Users->email = $request->input('email');
            $Users->role = $request->input('role');
            $Users->username = $request->input('username');
            $Users->update();
            return redirect('/user');
        }
     public function deleteUser($id)
        {
            $Users = User::findOrFail($id);

            $Users->delete();

            return redirect('/user');
        }
}

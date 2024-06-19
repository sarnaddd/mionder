<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function isLogin() {
        if (Auth::check()) {
            return redirect('dashboard');
        } else{
            return view('home');
        }
    }

    public function login() {
        return view('auth.login');
    }

    public function actionLogin(Request $request) {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect('/dashboard');
        } else{
            Session::flash('error', 'Error! incorrect email or password.');
            return redirect('dashboard');
        }
    }

    public function actionLogout() {
        Auth::logout();
        return redirect('/');
    }

    public function register() {
        return view('auth.register');
    }

    public function actionRegister(Request $request) {
        $request->validate([
            'password' => 'required|min:6',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'password' => Hash::make($request->password),
        ]);

        Session::flash('message', 'Your account is successfully registered! Please log in using your email and password.');
        return redirect('/login');
    }
}

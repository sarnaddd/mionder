<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ChangePasswordController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KeluhanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TrackerController;
use App\Http\Controllers\TrackerDashboardController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\Router;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', [AuthController::class, 'isLogin'])->name('isLogin');
// Route::get('/dashboard', [AuthController::class, 'isLogin'])->name('isLogin');
//home routes
Route::get('/', [HomeController::class, 'index'])->name('home');

//auth routes
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/actionLogin', [AuthController::class, 'actionLogin'])->name('actionLogin');
Route::get('/actionlogout', [AuthController::class, 'actionlogout'])->name('actionlogout')->middleware('auth');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/actionRegister', [AuthController::class, 'actionRegister'])->name('actionRegister');

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard')->middleware('auth');

Route::get('/keluhan', [KeluhanController::class, 'index'])->name('keluhan')->middleware('auth');
Route::get('/keluhanpatient', [KeluhanController::class, 'index'])->name('keluhanpatient')->middleware('auth');
Route::get('/tracker', [TrackerController::class, 'index'])->name('tracker')->middleware('auth');
Route::get('/user', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::post('/user/create', [UserController::class, 'addUser'])->name('user')->middleware('auth');
Route::put('/editUser/{id}', [UserController::class, 'updateUser'])->name('user.update')->middleware('auth');
Route::delete('/DeleteUser/{id}', [UserController::class, 'deleteUser'])->name('user.delete')->middleware('auth');
Route::post('/AddKeluhan', [KeluhanController::class, 'AddKeluhan'])->name('keluhan.add')->middleware('auth');
Route::delete('/DeleteKeluhan/{id}', [KeluhanController::class, 'deleteKeluhan'])->name('keluhan.delete')->middleware('auth');
Route::resource('/trackerdoctor', TrackerDashboardController::class);
Route::resource('/profile', ProfileController::class)->middleware('auth');
Route::get('/profiledoctor', function () {
    return view('profile.profiledoctor');
});
Route::get('/profilepatient', function () {
    return view('profile.profilepatient');
});
Route::resource('/changepassword', ChangePasswordController::class)->middleware('auth');
Route::get('/changepassworddoctor', function () {
    $user = Auth::user();
    return view('password.passworddoctor', [
        'user' => $user,
    ]);
})->middleware('auth');

Route::get('/changepasswordpatient', function () {
    $user = Auth::user();
    return view('password.passwordpatient', [
        'user' => $user,
    ]);
})->middleware('auth');

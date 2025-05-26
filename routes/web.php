<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Home');
})->name('home');

Route::get('/login', function () {
    return Inertia::render('Auth/Login');
})->name('login')->middleware('guest');

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ], [
        'email.required' => 'Email tidak boleh kosong',
        'password.required' => 'Password tidak boleh kosong',
    ]);

    $credentials = $request->only(['email', 'password']);
    if (Auth::attempt($credentials)) {
        $user = Auth::user();
        if ($user->isAbleTo('view dashboard')) {
            return redirect()->route('dashboard');
        }
        return redirect()->intended('/');
    }

    return back()->with([
        'message' => 'Email or password invalid!'
    ]);
})->name('login');

Route::get('/dashboard', function () {
    return Inertia::render('Admin/Dashboard');
})->name('dashboard')->middleware('auth');

Route::get('/users', function () {
    return Inertia::render('Admin/User');
})->name('dashboard')->middleware('auth');

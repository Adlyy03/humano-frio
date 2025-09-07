<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminAuthController extends Controller
{
    // Tampilkan halaman login
    public function showLoginForm()
    {
        return view('admin.login'); // pastikan ada file resources/views/admin/login.blade.php
    }

    // Proses login
    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('admin.dashboard');
        }

        return back()->withErrors('Email atau password salah.');
    }

    // Halaman dashboard admin
    public function dashboard()
    {
        return view('admin.dashboard'); // pastikan ada file resources/views/admin/dashboard.blade.php
    }

    // Logout
    public function logout()
    {
        Auth::logout();
        return redirect()->route('admin.login');
    }
}

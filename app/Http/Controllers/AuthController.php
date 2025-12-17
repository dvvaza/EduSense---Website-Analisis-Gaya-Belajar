<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function showRegisterForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $credentials = $request->validate([
            'full_name' => 'required|string|max:100',
            'email' => 'required|email|unique:users',
            'username' => 'required|string|max:50|unique:users',
            'password' => 'required|min:6|confirmed',
            'role' => 'in:admin,guru,siswa',
            'vark_type' => 'nullable|in:Visual,Auditory,Reading/Writing,Kinesthetic',
        ]);

        $user = User::create($request->all());

        Auth::login($user);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/login')->with('success', 'Registrasi berhasil! Silahkan Login');
        }
        return back()->withErrors([
            'full_name' => 'Registrasi gagal, silahkan cooba lagi.',
        ]);
    }

    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|string',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/')->with('success', 'Login berhasil!');
        }

        return back()->withErrors([
            'username' => 'Username atau password salah.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Anda telah logout.');
    }
}

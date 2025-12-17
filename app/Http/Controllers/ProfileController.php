<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TestResult;
use Auth;

class ProfileController extends Controller
{
    public function show()
    {
        $user = Auth::user(); // Mengambil pengguna yang sedang login

        // Mengambil hasil tes terakhir pengguna
        $testResult = TestResult::where('user_id', $user->id)
                                ->orderBy('updated_at', 'desc') // Mengambil hasil tes terakhir
                                ->first();

        // Mengirim data pengguna dan hasil tes ke view
        return view('profile.show', compact('user', 'testResult'));
    }

    // Tampilkan form untuk mengupdate profil pengguna
    public function edit()
    {
        return view('profile.edit', ['user' => Auth::user()]);
    }

    // Update profil pengguna
    public function update(Request $request)
    {
        $request->validate([
            'full_name' => 'required|max:100',
            'email' => 'required|email|max:100',
            'username' => 'required|max:50',
        ]);

        $user = Auth::user();
        $user->full_name = $request->input('full_name');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->save();

        return redirect()->route('profile.show')->with('success', 'Profil berhasil diperbarui!');
    }
}

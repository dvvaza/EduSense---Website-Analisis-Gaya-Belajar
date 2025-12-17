<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Recommendation;
use App\Models\TestResult;

class RecommendationController extends Controller
{
    public function index()
    {
        $user = auth()->user();

        // Ambil hasil test terbaru milik user
        $result = TestResult::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$result) {
            return redirect()->route('showTest')->with('error', 'Anda harus mengerjakan tes terlebih dahulu.');
        }

        // Ambil rekomendasi berdasarkan gaya belajar dominan
        $recommendation = Recommendation::where('style', $result->dominant_style)->first();

        return view('recommendation', [
            'result' => $result,
            'recommendation' => $recommendation
        ]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Question;
use App\Models\TestResult;
use App\Models\UserAnswer;
use App\Models\Choice;

class TestController extends Controller
{
    public function checkTest()
    {
        $user = auth()->user();

        $lastTest = TestResult::where('user_id', $user->id)
            ->whereMonth('updated_at', now()->month)
            ->first();

        if ($lastTest) {
            return redirect()->route('testResult')->with('error', 'Anda sudah mengikuti tes bulan ini.');
        }

        return redirect()->route('showTest');
    }

    public function showTest()
    {
        $questions = Question::with('choices')->get(); 
        return view('test', compact('questions'));
    }

    public function submitTest(Request $request)
    {
        $user = auth()->user(); 

        // ----- Simpan Jawaban User -----
        foreach ($request->input('answers') as $question_id => $choice_id) {
            UserAnswer::create([
                'user_id' => $user->id,
                'question_id' => $question_id,
                'choice_id' => $choice_id,
            ]);
        }

        // ----- Hitung Skor -----
        $scores = [
            'visual' => 0,
            'auditory' => 0,
            'reading_writing' => 0,
            'kinesthetic' => 0,
        ];

        foreach ($request->input('answers') as $question_id => $choice_id) {
            $choice = Choice::find($choice_id);

            if ($choice->score == 1) $scores['visual']++;
            elseif ($choice->score == 2) $scores['auditory']++;
            elseif ($choice->score == 3) $scores['reading_writing']++;
            elseif ($choice->score == 4) $scores['kinesthetic']++;
        }

        // Tentukan gaya belajar dominan
        $dominant_style = array_keys($scores, max($scores))[0];

        // ----- Simpan hasil tes -----
        TestResult::create([
            'user_id' => $user->id,
            'dominant_style' => $dominant_style,
            'visual_score' => $scores['visual'],
            'auditory_score' => $scores['auditory'],
            'reading_writing_score' => $scores['reading_writing'],
            'kinesthetic_score' => $scores['kinesthetic'],
        ]);

        return redirect()->route('testResult')->with('success', 'Tes berhasil disubmit!');
    }

    public function testResult()
    {
        $user = auth()->user();

        // Ambil hasil test terbaru milik user
        $result = TestResult::where('user_id', $user->id)
            ->orderBy('created_at', 'desc')
            ->first();

        if (!$result) {
            return redirect()->route('showTest')->with('error', 'Anda belum mengikuti tes.');
        }

        // Hitung total skor
        $visual = $result->visual_score;
        $auditory = $result->auditory_score;
        $rw = $result->reading_writing_score;
        $kinesthetic = $result->kinesthetic_score;

        $total = $visual + $auditory + $rw + $kinesthetic;

        // Hindari pembagian 0 kalau data rusak
        if ($total == 0) $total = 1;

        // Hitung persentase
        $percentages = [
            'visual' => round(($visual / $total) * 100),
            'auditory' => round(($auditory / $total) * 100),
            'reading_writing' => round(($rw / $total) * 100),
            'kinesthetic' => round(($kinesthetic / $total) * 100),
        ];

        return view('result', [
            'result' => $result,
            'dominant_style' => $result->dominant_style,
            'percentages' => $percentages,
        ]);
    }
}

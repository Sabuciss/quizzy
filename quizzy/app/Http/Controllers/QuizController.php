<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Question;

class QuizController extends Controller
{
    // Parāda tematu sarakstu
    public function index()
    {
        $topics = \App\Models\Topic::all();
        return view('quiz.index', compact('topics'));
    }

    // Sāk testu izvēlētajam tematam
    public function start(Request $request)
    {
        $request->validate([
            'topic_id' => 'required|exists:topics,id'
        ]);

        $questions = Question::where('topic_id', $request->topic_id)
            ->inRandomOrder()
            ->take(15)
            ->get();

        return view('quiz.play', compact('questions'));
    }
}

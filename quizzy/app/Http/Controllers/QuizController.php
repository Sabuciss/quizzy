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

    public function create()
    {
        $topics = Topic::all();
        return view('quiz.create', compact('topics'));
    }
    
     public function store(Request $request)
    {
        $validatedData = $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'question' => 'required|string|max:255',
            'correct_answer' => 'required|string|max:255',
            'wrong1' => 'required|string|max:255',
            'wrong2' => 'string|max:255',
            'wrong3' => 'string|max:255',
        ]);

        // Combine all answers into a JSON array for the 'options' column
        $options = [
            $validatedData['correct_answer'],
            $validatedData['wrong1'],
            $validatedData['wrong2'],
            $validatedData['wrong3'],
        ];

        // Shuffle the options to randomize their order
        shuffle($options);

        // Create the question in the database
        Question::create([
            'topic_id' => $validatedData['topic_id'],
            'question' => $validatedData['question'],
            'options' => json_encode($options), // Save the shuffled options as a JSON string
            'answer' => $validatedData['correct_answer'],
        ]);

        return redirect()->back()->with('success', 'Jautājums saglabāts!');
    }
}

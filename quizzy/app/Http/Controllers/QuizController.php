<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Topic;
use App\Models\Question;

class QuizController extends Controller
{
    // Parāda tematu sarakstu
    public function index() {
        $topics = \App\Models\Topic::all();
        return view('quiz.index', compact('topics'));
    }

    // Sāk testu izvēlētajam tematam
    public function start(Request $request) {
        $request->validate([
            'topic_id' => 'required|exists:topics,id'
        ]);

        // Count questions for the topic
        $questionCount = Question::where('topic_id', $request->topic_id)->count();

        // If less than 15, show error and do not start quiz
        if ($questionCount < 15) {
            return redirect()->back()->with('error', 'Šai tēmai nav pietiekami daudz jautājumu (min. 15)!');
        }

        $topicKey = 'quiz_questions_topic_' . $request->topic_id;

        if (!$request->session()->has($topicKey)) {
            $questions = Question::where('topic_id', $request->topic_id)
                ->take(15)
                ->get();

            // store IDs in session for this topic only
            $request->session()->put($topicKey, $questions->pluck('id')->toArray());
        }

        $questionIds = $request->session()->get($topicKey);

        if (empty($questionIds)) {
            return redirect()->back()->with('error', 'Šai tēmai vēl nav jautājumu!');
        }

        $questions = Question::whereIn('id', $questionIds)
            ->orderByRaw("FIELD(id, " . implode(',', $questionIds) . ")")
            ->get();

        $topic_id = $request->topic_id;

        return view('quiz.play', compact('questions', 'topic_id'));
    }

// Leaderborda funkcija
   public function results(Request $request) {
    $score = $request->query('score');
    $total = $request->query('total');
    $topic_id = $request->query('topic_id');

    if (auth()->check()) {
        \App\Models\QuizResult::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'topic_id' => $topic_id
            ],
            [
                'score' => $score,
                'total' => $total,
            ]
        );
    }

    return view('quiz.results', compact('score', 'total', 'topic_id'));
}

public function leaderboard($topic_id)
{
    $highscores = \App\Models\QuizResult::where('topic_id', $topic_id)
        ->orderByDesc('score')
        ->orderBy('created_at')
        ->with('user')
        ->take(10)
        ->get();

    $userId = auth()->id();

    $userScore = null;
    $userRank = null;
    if ($userId) {
        $userScore = \App\Models\QuizResult::where('user_id', $userId)
            ->where('topic_id', $topic_id)
            ->orderByDesc('score')
            ->first();

        if ($userScore) {
            $userRank = \App\Models\QuizResult::where('topic_id', $topic_id)
                ->where('score', '>', $userScore->score)
                ->count() + 1;
        }
    }

    return view('quiz.leaderboard', compact('highscores', 'userScore', 'userRank', 'topic_id'));
}

public function create() {
        $topics = Topic::all();
        return view('quiz.create', compact('topics'));
    }
    
     public function store(Request $request) {
        $validatedData = $request->validate([
            'topic_id' => 'required|exists:topics,id',
            'question' => 'required|string|max:255',
            'correct_answer' => 'required|string|max:255',
            'wrong1' => 'required|string|max:255',
            'wrong2' => 'string|max:255',
            'wrong3' => 'string|max:255',
        ]);

        // Create the question in the database
        Question::create([
            'topic_id' => $validatedData['topic_id'],
            'question' => $validatedData['question'],
            'correct_answer' => $validatedData['correct_answer'],
            'wrong1'=> $validatedData['wrong1'],
            'wrong2'=> $validatedData['wrong1'],
            'wrong3'=> $validatedData['wrong1'],
        ]);

        return redirect()->back()->with('status', 'Jautājums saglabāts!');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuizResult;
use App\Models\Topic;

class LeaderboardController extends Controller
{
  public function leaderboard(Request $request)
{
    $topicId = $request->get('topic_id', 'all');

    if ($topicId == 'all') {
        $highscores = QuizResult::with('user', 'topic')
            ->orderByDesc('score')
            ->take(10)
            ->get();

        // Atgūst visus lietotāja rezultātus visās tēmās
        $userResults = QuizResult::where('user_id', auth()->id())
            ->with('topic')
            ->orderByDesc('score')
            ->get();

    } else {
        $highscores = QuizResult::where('topic_id', $topicId)
            ->orderByDesc('score')
            ->with('user', 'topic')
            ->take()
            ->get();

        // Atgūst lietotāja rezultātus konkrētajā tēmā
        $userResults = QuizResult::where('user_id', auth()->id())
            ->where('topic_id', $topicId)
            ->with('topic')
            ->orderByDesc('score')
            ->get();
    }

    $topics = Topic::all();

    return view('quiz.leaderboard', compact('topics', 'highscores', 'userResults', 'topicId'));
}


}

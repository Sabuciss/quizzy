<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\LeaderboardController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('/', [LoginController::class, 'showLoginForm'])->name('login.form');
    Route::post('/login', [LoginController::class, 'login'])->name('login');

    Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');
    Route::post('/register', [RegisterController::class, 'register'])->name('register');
});

Route::middleware('auth')->group(function () {
    Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

    // Quiz Routes
    Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
    Route::post('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');
    Route::get('/results', [QuizController::class, 'results'])->name('quiz.results'); 
    
    Route::middleware('can:access-admin-features')->group(function () {
            Route::post('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
            Route::post('/questions', [QuizController::class, 'store'])->name('questions.store');
        });
});

// Quiz Routes
Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');

Route::get('/quiz/create', [QuizController::class, 'create'])->name('quiz.create');
Route::post('/questions', [QuizController::class, 'store'])->name('questions.store');
Route::post('/quiz/topic', [\App\Http\Controllers\QuizController::class, 'storeTopic'])->name('quiz.storeTopic');

Route::get('/results', [QuizController::class, 'results'])->name('quiz.results');

// Leaderboard lapa konkrētajai tēmai
Route::get('/leaderboard/{topic}', [LeaderboardController::class, 'leaderboard'])->name('quiz.leaderboard')->middleware('auth');

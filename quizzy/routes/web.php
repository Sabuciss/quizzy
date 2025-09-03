<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;


Route::get('/', function () {
    return view('welcome');
});

Route::get('/quiz', [QuizController::class, 'index'])->name('quiz.index');
Route::post('/quiz/start', [QuizController::class, 'start'])->name('quiz.start');

//auth
// Show login form
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login.form');

// Handle login submission
Route::post('/login', [LoginController::class, 'login'])->name('login');

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
// Show registration form
Route::get('/register', [RegisterController::class, 'showRegisterForm'])->name('register.form');

// Handle registration submission
Route::post('/register', [RegisterController::class, 'register'])->name('register');




<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    protected $fillable = ['topic_id', 'question', 'correct_answer', 'wrong1', 'wrong2', 'wrong3', 'wrong4'];
}

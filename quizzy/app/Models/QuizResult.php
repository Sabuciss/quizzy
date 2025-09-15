<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizResult extends Model
{
    protected $fillable = ['user_id', 'topic_id', 'score', 'total'];

    public function user()
    {
        return $this->belongsTo(User::class); // Attiecība ar User modeli
    }
}

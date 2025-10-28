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

    public function topic()//priekš leaderboarda
    {
        return $this->belongsTo(Topic::class);  // Šī ir nepieciešamā attiecība
    }
}

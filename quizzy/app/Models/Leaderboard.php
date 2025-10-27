<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Leaderboard extends Model
{
    // Nav flexible, jo neizmainām datu tabulas, tikai izmantojam šo modeli rezultātu vaicāšanai
    public $timestamps = false; // Ja leaderboard tabulā nav laika zīmju

    // Pieņemam, ka tabulas nosaukums ir 'quiz_results', vari pielāgot, ja vajag
    protected $table = 'quiz_results';

    // Definē saistības, lai viegli piekļūtu lietotājam un tēmai
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }

    public static function topResults($limit = 10)
    {
        return self::with('user', 'topic')
            ->orderByDesc('score')
            ->limit($limit)
            ->get();
    }
}

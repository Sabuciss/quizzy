<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    public function run(): void
    {
        $topics = [
            'Grāmatas',
            'Sports',
            'Vēsture un Dabaszinības',
            'Augstpapēžu kurpes',
            'Minioni',
        ];

        foreach ($topics as $topic) {
            Topic::create(['name' => $topic]);
        }
    }
}

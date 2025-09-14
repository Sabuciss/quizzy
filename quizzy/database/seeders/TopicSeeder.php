<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Topic;

class TopicSeeder extends Seeder
{
    public function run()
    {
        Topic::create(['name' => 'Grāmatas']);
        Topic::create(['name' => 'Sports']);
        Topic::create(['name' => 'Vēsture un Dabaszinības']);
        Topic::create(['name' => 'Augstpapēžu kurpes']);
        Topic::create(['name' => 'Minioni']);
    }
}

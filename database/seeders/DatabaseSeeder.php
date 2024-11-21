<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Journal;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        //Journal::factory(10)->create();

        Journal::factory()->create([
            'entry' => 'Joy',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/joy.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Nostalgia',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/nostalgia.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Sadness',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/sadness.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Anger',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179765/anger.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Envy',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/envy1.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Ennui',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/ennui.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Embarrasment',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/embarrassment.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Disgust',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179765/disgust.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Fear',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/fear.png',
        ]);

        Journal::factory()->create([
            'entry' => 'Anxiety',
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732180138/anxiety.png',
        ]);
    }
}

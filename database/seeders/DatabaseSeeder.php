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
            //Joy
            'entry' => "Today I woke up and saw how the flowers in the garden were beginning to open. The sun was soft and the cool breeze made me smile. It gave me joy to think about how simple can be so beautiful.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/joy.png',
        ]);

        Journal::factory()->create([
            //Nostalgia
            'entry' => "Today, I remembered the summers of my childhood, playing outside until sunset. The sound of laughter and the smell of fresh earth made me feel nostalgic for those simpler, happier times.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/nostalgia.png',
        ]);

        Journal::factory()->create([
            //Sadness
            'entry' => "I felt a wave of sadness today when I saw an empty place we used to visit. The memories hit me harder than I thought they would.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179767/sadness.png',
        ]);

        Journal::factory()->create([
            //Anger
            'entry' => "I was so angry today when someone interrupted me while I was speaking. It felt disrespectful, and I couldn't shake the frustration.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179765/anger.png',
        ]);

        Journal::factory()->create([
            //Envy
            'entry' => "I saw someone’s success today, and it hit me hard. I couldn't help but feel envious of how easily they seem to have it all together.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/envy1.png',
        ]);

        Journal::factory()->create([
            //Ennui
            'entry' => "I had so much to do today, but I just couldn't find the energy to start. Everything felt like too much effort, and I ended up wasting the whole day.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/ennui.png',
        ]);

        Journal::factory()->create([
            //Embarrasment
            'entry' => "I embarrassed myself today in front of everyone. I said something stupid and instantly regretted it. I couldn't help but feel my face burn with shame.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/embarrassment.png',
        ]);

        Journal::factory()->create([
            //Disgust
            'entry' => "I heard some disturbing news today, and it left a bad taste in my mouth. It was hard to shake the feeling of discomfort after that.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179765/disgust.png',
        ]);

        Journal::factory()->create([
            //Fear
            'entry' => "I had a moment today where I felt a wave of fear. The uncertainty of the future overwhelmed me, and I couldn't shake the feeling that something bad was about to happen.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732179766/fear.png',
        ]);

        Journal::factory()->create([
            //Anxiety
            'entry' => "Today I felt overwhelmed. I had too many things to do and I didn't know where to start. Anxiety was drowning me, I was afraid of not arriving on time or not being up to par.",
            'emotion' => 'https://res.cloudinary.com/djdpt7dqi/image/upload/v1732180138/anxiety.png',
        ]);
    }
}

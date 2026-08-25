<?php

namespace Database\Seeders;

use Illuminate\ Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder

    public function run(): void
    {
        News::create([
            'title' => 'Eerste nieuwsitem',
            'content' => 'Dit is de inhoud van het eerste nieuwsitem. Welkom op onze website over Parijs!',
            'published_date' => '2026-08-25',
        ]);

        News::create([
            'title' => 'Tweede nieuwsitem',
            'content' => 'Dit is de inhoud van het tweede nieuwsitem. Veel plezier op onze website!',
            'published_date' => '2026-08-24',
        ]);
    }

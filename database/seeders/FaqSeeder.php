<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Faq;

class FaqSeeder extends Seeder
{
    public function run(): void
    {
        Faq::create([
            'question' => 'Wat is de beste tijd om Parijs te bezoeken?',
            'answer' => 'De lente (april-juni) en de herfst (september-oktober) zijn de beste seizoenen. Het weer is aangenaam en er zijn minder toeristen.',
            'category_id' => 1
        ]);

        Faq::create([
            'question' => 'Hoeveel kost een bezoek aan de Eiffeltoren?',
            'answer' => 'De prijs varieert van €11,30 tot €28,30 afhankelijk van de leeftijd en of je naar de top gaat. Je kunt online tickets kopen om wachtrijen te vermijden.',
            'category_id' => 2
        ]);

        Faq::create([
            'question' => 'Is Parijs duur?',
            'answer' => 'Parijs kan duur zijn, maar er zijn veel gratis activiteiten zoals wandelen in parken, bezoek aan kerken en markten. Een baguette en kaas kopen bij de lokale bakker is een goedkope maaltijd.',
            'category_id' => 3
        ]);
    }
}
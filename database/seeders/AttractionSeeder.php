<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Attraction;

class AttractionSeeder extends Seeder
{
    public function run(): void
    {
        Attraction::create([
            'name' => 'Eiffeltoren',
            'image' => 'Eifeltore1.jpg',
            'description' => 'Het symbool van Parijs. Beklim de 324 meter hoge toren voor een prachtig uitzicht over de stad.',
            'detail' => 'De Eiffeltoren is gebouwd in 1889 voor de Wereldtentoonstelling. Met een hoogte van 324 meter is het de hoogste structuur van Parijs. Je kunt naar de top gaan voor een panoramisch uitzicht over de stad. Er zijn restaurants op de eerste en tweede verdieping.',
            'address' => 'Champ de Mars, 5 Avenue Anatole France, 75007 Paris',
            'price' => '€11,30 - €28,30'
        ]);

        Attraction::create([
            'name' => 'Louvre Museum',
            'image' => 'Louvre.jpg',
            'description' => 'Het grootste museum ter wereld met duizenden kunstwerken, waaronder de Mona Lisa.',
            'detail' => 'Het Louvre is oorspronkelijk gebouwd als een fort in de 12e eeuw en werd later een koninklijk paleis. Tegenwoordig is het het grootste museum ter wereld met meer dan 380.000 kunstwerken. De glazen piramide bij de ingang is ontworpen door I.M. Pei.',
            'address' => 'Rue de Rivoli, 75001 Paris',
            'price' => '€17 (online) / €15 (ter plaatse)'
        ]);

        Attraction::create([
            'name' => 'Notre-Dame',
            'image' => 'notre-dame-de-paris.jpg',
            'description' => 'De beroemde kathedraal op het Île de la Cité, een meesterwerk van gotische architectuur.',
            'detail' => 'De bouw van Notre-Dame begon in 1163 en duurde meer dan 100 jaar. De kathedraal is beroemd om zijn prachtige glas-in-loodramen, de twee torens van 69 meter hoog en de beroemde waterspuwers. Na de brand in 2019 wordt de kathedraal gerestaureerd.',
            'address' => '6 Parvis Notre-Dame - Place Jean-Paul II, 75004 Paris',
            'price' => 'Gratis (kerk) / €10 (torenbeklimming)'
        ]);

        Attraction::create([
            'name' => 'Arc de Triomphe',
            'image' => 'ArcDeTriomphe.jpg',
            'description' => 'De triomfboog ter ere van de Franse overwinningen. Beklim de top voor een panoramisch uitzicht.',
            'detail' => 'De Arc de Triomphe werd gebouwd in opdracht van Napoleon in 1806 ter ere van zijn overwinningen. De boog is 50 meter hoog en heeft een prachtig uitzicht over de Champs-Élysées. Onder de boog ligt het graf van de onbekende soldaat.',
            'address' => 'Place Charles de Gaulle, 75008 Paris',
            'price' => '€13'
        ]);

        Attraction::create([
            'name' => 'Sacré-Cœur',
            'image' => 'SacréCoeur.jpg',
            'description' => 'De witte basiliek op de Montmartre-heuvel met een prachtig uitzicht over de stad.',
            'detail' => 'De Sacré-Cœur werd gebouwd tussen 1875 en 1914 als eerbetoon aan de slachtoffers van de Frans-Pruisische oorlog. De basiliek is gemaakt van witte steen die helder blijft door de regen. Het uitzicht vanaf de koepel is een van de mooiste van Parijs.',
            'address' => '35 Rue du Chevalier de la Barre, 75018 Paris',
            'price' => 'Gratis (basiliek) / €8 (koepelbeklimming)'
        ]);

        Attraction::create([
            'name' => 'Musée d\'Orsay',
            'image' => 'museauD\'orsay.jpg',
            'description' => 'Een museum in een voormalig treinstation met een indrukwekkende collectie impressionistische kunst.',
            'detail' => 'Het Musée d\'Orsay is gevestigd in een prachtig treinstation uit 1900. Het museum heeft de grootste collectie impressionistische en post-impressionistische kunst ter wereld, met werken van Monet, Van Gogh, Renoir en Degas.',
            'address' => '1 Rue de la Légion d\'Honneur, 75007 Paris',
            'price' => '€16'
        ]);

        Attraction::create([
            'name' => 'Centre Pompidou',
            'image' => 'Pompidou.jpg',
            'description' => 'Een modern kunstmuseum met een opvallende architectuur van buitenaf, met kleurrijke leidingen.',
            'detail' => 'Het Centre Pompidou is ontworpen door architecten Renzo Piano en Richard Rogers. Het gebouw is beroemd om zijn "inside-out" ontwerp, waarbij de leidingen en trappen aan de buitenkant zichtbaar zijn. Het museum heeft een grote collectie moderne kunst.',
            'address' => 'Place Georges-Pompidou, 75004 Paris',
            'price' => '€15'
        ]);
    }
}
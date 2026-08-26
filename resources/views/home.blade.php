@extends('layouts.app')

@section('content')
<div class="relative">
    <div class="bg-cover bg-center h-[500px] flex items-center justify-center" style="background-image: url('{{ asset('images/Eifeltore1.jpg') }}');">
        <div class="text-center text-white bg-black bg-opacity-40 p-8 rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Welkom in Parijs! 🇫🇷</h1>
            <p class="text-xl">Ontdek de mooiste stad ter wereld</p>
        </div>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">Ontdek Parijs</h2>
            <p class="text-gray-600 mt-2">De meest populaire bezienswaardigheden</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            @php
                $attractions = [
                    [
                        'name' => 'Eiffeltoren',
                        'image' => 'Eifeltore1.jpg',
                        'description' => 'Het symbool van Parijs. Beklim de 324 meter hoge toren voor een prachtig uitzicht over de stad.'
                    ],
                    [
                        'name' => 'Louvre Museum',
                        'image' => 'Louvre.jpg',
                        'description' => 'Het grootste museum ter wereld met duizenden kunstwerken, waaronder de Mona Lisa.'
                    ],
                    [
                        'name' => 'Notre-Dame',
                        'image' => 'notre-dame-de-paris.jpg',
                        'description' => 'De beroemde kathedraal op het Île de la Cité, een meesterwerk van gotische architectuur.'
                    ],
                    [
                        'name' => 'Arc de Triomphe',
                        'image' => 'ArcDeTriomphe.jpg',
                        'description' => 'De triomfboog ter ere van de Franse overwinningen. Beklim de top voor een panoramisch uitzicht.'
                    ],
                    [
                        'name' => 'Sacré-Cœur',
                        'image' => 'SacréCoeur.jpg',
                        'description' => 'De witte basiliek op de Montmartre-heuvel met een prachtig uitzicht over de stad.'
                    ],
                    [
                        'name' => 'Musée d\'Orsay',
                        'image' => 'museauD\'orsay.jpg',
                        'description' => 'Een museum in een voormalig treinstation met een indrukwekkende collectie impressionistische kunst.'
                    ],
                    [
                        'name' => 'Centre Pompidou',
                        'image' => 'Pompidou.jpg',
                        'description' => 'Een modern kunstmuseum met een opvallende architectuur van buitenaf, met kleurrijke leidingen.'
                    ]
                ];
            @endphp

            @foreach($attractions as $attraction)
                <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                    <img src="{{ asset('images/' . $attraction['image']) }}" alt="{{ $attraction['name'] }}" class="w-full h-48 object-cover">
                    <div class="p-6">
                        <h3 class="text-xl font-bold mb-2">{{ $attraction['name'] }}</h3>
                        <p class="text-gray-600">{{ $attraction['description'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
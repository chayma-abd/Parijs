@extends('layouts.app')

@section('content')
<div class="relative">
    <div class="bg-cover bg-center h-[500px] flex items-center justify-center" style="background-image: url('https://images.unsplash.com/photo-1502602898657-3e91760cbb34?w=1200');">
        <div class="text-center text-white bg-black bg-opacity-40 p-8 rounded-lg">
            <h1 class="text-5xl font-bold mb-4">Welkom in Parijs! 🇫🇷</h1>
            <p class="text-xl">Ontdek de mooiste stad ter wereld</p>
        </div>
    </div>
</div>

<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="text-center mb-10">
            <h2 class="text-3xl font-bold text-gray-800">Wat te doen in Parijs?</h2>
            <p class="text-gray-600 mt-2">De meest populaire bezienswaardigheden</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1543349689-9a4d426bee8e?w=400" alt="Eiffeltoren" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Eiffeltoren</h3>
                    <p class="text-gray-600">Het symbool van Parijs. Beklim de 324 meter hoge toren voor een prachtig uitzicht over de stad.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1564915322515-8b2cceb3c8b1?w=400" alt="Louvre" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Louvre Museum</h3>
                    <p class="text-gray-600">Het grootste museum ter wereld met duizenden kunstwerken, waaronder de Mona Lisa.</p>
                </div>
            </div>

            <div class="bg-white rounded-lg shadow-lg overflow-hidden">
                <img src="https://images.unsplash.com/photo-1583583325395-9a017c155f79?w=400" alt="Notre-Dame" class="w-full h-48 object-cover">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2">Notre-Dame</h3>
                    <p class="text-gray-600">De beroemde kathedraal op het Île de la Cité, een meesterwerk van gotische architectuur.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
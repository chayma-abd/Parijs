@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Profiel van {{ $user->name }}</h1>

                <div class="mb-4">
                    @if($user->profile_picture)
                        <img src="{{ asset('storage/' . $user->profile_picture) }}" alt="Profielfoto" class="w-32 h-32 rounded-full object-cover">
                    @else
                        <p>Geen profielfoto</p>
                    @endif
                </div>

                <div class="mb-2">
                    <span class="font-bold">Gebruikersnaam:</span> {{ $user->username ?? 'Niet ingesteld' }}
                </div>

                <div class="mb-2">
                    <span class="font-bold">Email:</span> {{ $user->email }}
                </div>

                <div class="mb-2">
                    <span class="font-bold">Verjaardag:</span> {{ $user->birthday ? date('d-m-Y', strtotime($user->birthday)) : 'Niet ingesteld' }}
                </div>

                <div class="mb-4">
                    <span class="font-bold">Over mij:</span>
                    <p>{{ $user->about_me ?? 'Geen beschrijving' }}</p>
                </div>

                @auth
                    @if(auth()->user()->id === $user->id)
                        <a href="{{ route('profile.edit', $user->id) }}" class="inline-block bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">Profiel bewerken</a>
                    @endif
                @endauth

                <a href="/" class="inline-block mt-4 text-blue-600 hover:underline">← Terug naar home</a>
            </div>
        </div>
    </div>
</div>
@endsection
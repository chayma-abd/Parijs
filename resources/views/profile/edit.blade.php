@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Profiel bewerken</h1>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('profile.update', $user->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')

                    <div class="mb-4">
                        <label for="username" class="block font-bold mb-2">Gebruikersnaam</label>
                        <input type="text" id="username" name="username" value="{{ old('username', $user->username) }}" class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>

                    <div class="mb-4">
                        <label for="birthday" class="block font-bold mb-2">Verjaardag</label>
                        <input type="date" id="birthday" name="birthday" value="{{ old('birthday', $user->birthday) }}" class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>

                    <div class="mb-4">
                        <label for="about_me" class="block font-bold mb-2">Over mij</label>
                        <textarea id="about_me" name="about_me" rows="4" class="w-full border border-gray-300 rounded px-4 py-2">{{ old('about_me', $user->about_me) }}</textarea>
                    </div>

                    <div class="mb-4">
                        <label for="profile_picture" class="block font-bold mb-2">Profielfoto</label>
                        <input type="file" id="profile_picture" name="profile_picture" class="w-full">
                        @if($user->profile_picture)
                            <p class="mt-2">Huidige foto: <img src="{{ asset('storage/' . $user->profile_picture) }}" width="100"></p>
                        @endif
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Opslaan</button>
                    <a href="{{ route('profile.show', $user->id) }}" class="inline-block ml-2 bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
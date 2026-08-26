@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Nieuws toevoegen</h1>

                <form action="{{ route('news.store') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="title" class="block font-bold mb-2">Titel</label>
                        <input type="text" id="title" name="title" class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>

                    <div class="mb-4">
                        <label for="content" class="block font-bold mb-2">Inhoud</label>
                        <textarea id="content" name="content" rows="5" class="w-full border border-gray-300 rounded px-4 py-2"></textarea>
                    </div>

                    <div class="mb-4">
                        <label for="published_date" class="block font-bold mb-2">Publicatiedatum</label>
                        <input type="date" id="published_date" name="published_date" class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>

                    <button type="submit" class="bg-green-500 text-white px-6 py-2 rounded hover:bg-green-600">Opslaan</button>
                    <a href="{{ route('news.index') }}" class="inline-block ml-2 bg-gray-500 text-white px-6 py-2 rounded hover:bg-gray-600">Annuleren</a>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
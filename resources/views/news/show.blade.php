@extends('layouts.app')

@section('content')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h1 class="text-2xl font-bold mb-4">{{ $news->title }}</h1>
                    <p class="text-sm text-gray-500 mb-4">Gepubliceerd op: {{ $news->published_date }}</p>

                    @if($news->image)
                        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" class="max-w-full h-auto mb-4">
                    @endif

                    <div class="prose max-w-none">
                        {{ $news->content }}
                    </div>

                    <a href="{{ route('news.index') }}" class="mt-6 inline-block text-blue-600 hover:underline">← Terug naar nieuwsoverzicht</a>
                </div>
            </div>
        </div>
    </div>
@endsection
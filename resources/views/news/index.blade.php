@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Nieuws overzicht</h1>

                @auth
                    @if(auth()->user()->email === 'admin@ehb.be')
                        <a href="{{ route('news.create') }}" class="inline-block mb-4 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">+ Nieuws toevoegen</a>
                    @endif
                @endauth

                @foreach($news as $item)
                    <div class="mb-4 p-4 border rounded">
                        <a href="{{ route('news.show', $item->id) }}" class="text-xl font-semibold text-blue-600 hover:underline">
                            {{ $item->title }}
                        </a>
                        <p class="text-sm text-gray-500">Gepubliceerd op: {{ $item->published_date }}</p>
                        <p class="mt-2">{{ Str::limit($item->content, 100) }}</p>

                        @auth
                            @if(auth()->user()->email === 'admin@ehb.be')
                                <a href="{{ route('news.edit', $item->id) }}" class="text-blue-600 hover:underline ml-2">Bewerken</a>
                                <form action="{{ route('news.destroy', $item->id) }}" method="POST" class="inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-600 hover:underline ml-2" onclick="return confirm('Weet je zeker dat je dit nieuwsitem wilt verwijderen?')">Verwijderen</button>
                                </form>
                            @endif
                        @endauth
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
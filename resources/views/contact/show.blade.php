@extends('layouts.app')

@section('content')
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
            <div class="p-6 text-gray-900">
                <h1 class="text-2xl font-bold mb-6">Contact</h1>

                @if(session('success'))
                    <div class="bg-green-100 text-green-700 p-4 rounded mb-4">
                        {{ session('success') }}
                    </div>
                @endif

                <form action="{{ route('contact.send') }}" method="POST">
                    @csrf

                    <div class="mb-4">
                        <label for="name" class="block font-bold mb-2">Naam</label>
                        <input type="text" id="name" name="name" class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>

                    <div class="mb-4">
                        <label for="email" class="block font-bold mb-2">E-mail</label>
                        <input type="email" id="email" name="email" class="w-full border border-gray-300 rounded px-4 py-2">
                    </div>

                    <div class="mb-4">
                        <label for="message" class="block font-bold mb-2">Bericht</label>
                        <textarea id="message" name="message" rows="5" class="w-full border border-gray-300 rounded px-4 py-2"></textarea>
                    </div>

                    <button type="submit" class="bg-blue-500 text-white px-6 py-2 rounded hover:bg-blue-600">Versturen</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
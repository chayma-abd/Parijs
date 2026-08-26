@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    .grid {
        display: grid;
        grid-template-columns: repeat(3, 1fr);
        gap: 20px;
    }
    .card {
        border: 1px solid #ddd;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    }
    .card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
    }
    .card-body {
        padding: 12px;
    }
    .card-body h3 {
        margin: 0 0 5px 0;
        font-size: 1.1rem;
    }
    .card-body h3 a {
        text-decoration: none;
        color: #333;
    }
    .card-body h3 a:hover {
        color: #007bff;
    }
    .card-body p {
        color: #666;
        font-size: 0.85rem;
        margin: 0 0 8px 0;
    }
    .text-center {
        text-align: center;
    }
    .mb-10 {
        margin-bottom: 30px;
    }
    .mt-8 {
        margin-top: 30px;
    }
    h1 {
        font-size: 2rem;
        margin-bottom: 5px;
    }
    .subtitle {
        color: #666;
        margin-top: 0;
    }
    .btn-add {
        display: inline-block;
        background: #28a745;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        margin-bottom: 20px;
    }
    .btn-add:hover {
        background: #218838;
    }
    .btn-edit {
        color: #007bff;
        text-decoration: none;
        margin-right: 10px;
    }
    .btn-edit:hover {
        text-decoration: underline;
    }
    .btn-delete {
        color: #dc3545;
        background: none;
        border: none;
        cursor: pointer;
        text-decoration: underline;
    }
    .btn-delete:hover {
        color: #c82333;
    }
</style>

<div class="container">
    <div class="text-center mb-10">
        <h1>Alle bezienswaardigheden in Parijs</h1>
    </div>

    @auth
        @if(auth()->user()->email === 'admin@ehb.be')
            <div class="text-center">
                <a href="{{ route('attractions.create') }}" class="btn-add">+ Bezienswaardigheid toevoegen</a>
            </div>
        @endif
    @endauth

    <div class="grid">
        @foreach($attractions as $attraction)
            <div class="card">
                <img src="{{ asset('images/' . $attraction->image) }}" alt="{{ $attraction->name }}">
                <div class="card-body">
                    <h3>
                        <a href="{{ route('attractions.show', $attraction->id) }}">
                            {{ $attraction->name }}
                        </a>
                    </h3>
                    <p>{{ $attraction->description }}</p>
                    <a href="{{ route('attractions.show', $attraction->id) }}" style="color: #007bff; text-decoration: none;">Lees meer →</a>

                    @auth
                        @if(auth()->user()->email === 'admin@ehb.be')
                            <div style="margin-top: 10px;">
                                <a href="{{ route('attractions.edit', $attraction->id) }}" class="btn-edit">Bewerken</a>
                                <form action="{{ route('attractions.destroy', $attraction->id) }}" method="POST" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-delete" onclick="return confirm('Weet je zeker dat je deze bezienswaardigheid wilt verwijderen?')">Verwijderen</button>
                                </form>
                            </div>
                        @endif
                    @endauth
                </div>
            </div>
        @endforeach
    </div>

    <div class="text-center mt-8">
        <a href="/" style="color: #007bff; text-decoration: none;">Terug naar home</a>
    </div>
</div>
@endsection
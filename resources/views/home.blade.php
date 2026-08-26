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
    h1 {
        font-size: 2rem;
        margin-bottom: 5px;
    }
    .subtitle {
        color: #666;
        margin-top: 0;
    }
</style>

<div class="container">
    <div class="text-center mb-10">
        <h1>Ontdek Parijs</h1>
        <p class="subtitle">De meest populaire bezienswaardigheden</p>
    </div>

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
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
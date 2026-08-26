@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .form-group {
        margin-bottom: 15px;
    }
    .form-group label {
        display: block;
        font-weight: bold;
        margin-bottom: 5px;
    }
    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ddd;
        border-radius: 4px;
    }
    .form-group textarea {
        height: 100px;
    }
    .btn {
        display: inline-block;
        background: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 4px;
        border: none;
        cursor: pointer;
    }
    .btn:hover {
        background: #0056b3;
    }
    .btn-cancel {
        background: #6c757d;
    }
    .btn-cancel:hover {
        background: #5a6268;
    }
    .current-image {
        max-width: 200px;
        margin-top: 10px;
    }
</style>

<div class="container">
    <h1>Bezienswaardigheid bewerken</h1>

    <form action="{{ route('attractions.update', $attraction->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" value="{{ $attraction->name }}" required>
        </div>

        <div class="form-group">
            <label for="description">Korte beschrijving</label>
            <input type="text" id="description" name="description" value="{{ $attraction->description }}" required>
        </div>

        <div class="form-group">
            <label for="detail">Uitgebreide beschrijving</label>
            <textarea id="detail" name="detail" rows="5" required>{{ $attraction->detail }}</textarea>
        </div>

        <div class="form-group">
            <label for="address">Adres</label>
            <input type="text" id="address" name="address" value="{{ $attraction->address }}" required>
        </div>

        <div class="form-group">
            <label for="price">Prijs</label>
            <input type="text" id="price" name="price" value="{{ $attraction->price }}" required>
        </div>

        <div class="form-group">
            <label for="image">Afbeelding</label>
            <input type="file" id="image" name="image">
            @if($attraction->image)
                <div>
                    <p>Huidige afbeelding:</p>
                    <img src="{{ asset('images/' . $attraction->image) }}" alt="{{ $attraction->name }}" class="current-image">
                </div>
            @endif
        </div>

        <button type="submit" class="btn">Bijwerken</button>
        <a href="{{ route('attractions.index') }}" class="btn btn-cancel">Annuleren</a>
    </form>
</div>
@endsection
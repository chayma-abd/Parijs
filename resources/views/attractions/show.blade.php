@extends('layouts.app')

@section('content')
<style>
    .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
    }
    .detail-title {
        font-size: 2rem;
        margin-bottom: 5px;
    }
    .detail-image {
        width: 100%;
        max-width: 600px;
        height: auto;
        border-radius: 8px;
        margin: 15px 0;
    }
    .detail-subtitle {
        font-size: 1.3rem;
        font-weight: bold;
        margin-top: 20px;
        margin-bottom: 10px;
    }
    .detail-text {
        color: #333;
        line-height: 1.6;
    }
    .detail-label {
        font-weight: bold;
        margin-top: 15px;
        margin-bottom: 5px;
    }
    .detail-value {
        color: #333;
        margin-bottom: 10px;
    }
    .back-link {
        display: inline-block;
        margin-top: 20px;
        color: #007bff;
        text-decoration: none;
    }
    .back-link:hover {
        text-decoration: underline;
    }
</style>

<div class="container">
    <h1 class="detail-title">{{ $attraction->name }}</h1>

    <img src="{{ asset('images/' . $attraction->image) }}" alt="{{ $attraction->name }}" class="detail-image">

    <h2 class="detail-subtitle">Over {{ $attraction->name }}</h2>
    <p class="detail-text">{{ $attraction->detail }}</p>

    <div class="detail-label">Adres</div>
    <div class="detail-value">{{ $attraction->address }}</div>

    <div class="detail-label">Prijs</div>
    <div class="detail-value">{{ $attraction->price }}</div>

    <a href="/" class="back-link">← Terug naar home</a>
</div>
@endsection
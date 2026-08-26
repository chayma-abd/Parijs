@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Alle bezienswaardigheden in Parijs</h1>

    <ul>
        @foreach($attractions as $attraction)
            <li>
                <a href="{{ route('attractions.show', $attraction['id']) }}">
                    <h3>{{ $attraction['name'] }}</h3>
                </a>
                <p>{{ $attraction['description'] }}</p>
            </li>
        @endforeach
    </ul>

    <a href="/">Terug naar home</a>
</div>
@endsection
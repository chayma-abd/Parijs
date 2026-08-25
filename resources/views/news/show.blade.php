<!DOCTYPE html>
<html>
<head>
    <title>{{ $news->title }}</title>
</head>
<body>
    <h1>{{ $news->title }}</h1>
    <p>Gepubliceerd op: {{ $news->published_date }}</p>
    
    @if($news->image)
        <img src="{{ asset('storage/' . $news->image) }}" alt="{{ $news->title }}" width="300">
    @endif
    
    <div>
        {{ $news->content }}
    </div>
    
    <a href="{{ route('news.index') }}">← Terug naar nieuwsoverzicht</a>
</body>
</html>
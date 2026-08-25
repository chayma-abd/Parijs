<!DOCTYPE html>
<html>
<head>
    <title>Nieuws</title>
</head>
<body>
    <h1>Nieuws overzicht</h1>

    @foreach($news as $item)
        <div>
            <h2>{{ $item->title }}</h2>
            <p>Gepubliceerd op: {{ $item->published_date }}</p>
            <p>{{ Str::limit($item->content, 100) }}</p>
        </div>
    @endforeach

    <a href="/">Terug naar home</a>
</body>
</html>
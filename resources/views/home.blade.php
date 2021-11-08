<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Movies</title>
</head>
<body>
    <h1>Laravel Movies</h1>
    <ul>
        @foreach ($data as $movie)
            <li>
                <h2>{{$movie['title']}}</h2>
                <p>titolo originale: {{$movie['original_title']}}</p>
                <p>nazionalità: {{$movie['nationality']}}</p>
                <p>Data: {{$movie['date']}}</p>
                <p>Vot0: {{$movie['vote']}}</p>
            </li>
        @endforeach
    </ul>
</body>
</html>
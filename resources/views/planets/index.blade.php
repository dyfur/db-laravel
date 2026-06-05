<!DOCTYPE html>
<html>
<head>
    <title>Planets</title>
</head>
<body>
    <h1>All Planets</h1>

    <ul>
        @foreach($planets as $planet)
            <li>
                <strong>{{ $planet->name }}</strong><br>
                Description: {{ $planet->description }}<br>
                Size: {{ $planet->size_in_km }} km<br>
                Solar System: {{ $planet->solarSystem->name }}<br><br>
            </li>
        @endforeach
    </ul>
</body>
</html>

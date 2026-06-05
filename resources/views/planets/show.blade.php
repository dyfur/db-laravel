<!DOCTYPE html>
<html lang="en">
<head>

    <li>
        <strong>{{ $planet->name }}</strong><br>
        Description: {{ $planet->description }}<br>
        Size: {{ $planet->size_in_km }} km<br>
        Solar System: {{ $planet->solarSystem->name }}
    </li>


</body>
</html>
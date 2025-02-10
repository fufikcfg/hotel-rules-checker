<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>...</title>
    </head>
    <body >
        <h1>Hotels</h1>
        <ul>
            @foreach ($hotels as $hotel)
                <li>
                    {{ $hotel->name }}
                    <a href="{{ url('/check-rules/' . $hotel->id) }}" target="_blank">Check Rules</a>
                </li>
            @endforeach
        </ul>
    </body>
</html>

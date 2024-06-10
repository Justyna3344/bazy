@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacja: {{ $relacja->Nazwa }}</title>
</head>
<body>
    <h1>Relacja: {{ $relacja->Nazwa }}</h1>

    <h2>Przystanki po drodze:</h2>
    <ul>
        @foreach($trasy as $trasa)
            <li>Przystanek początkowy: {{ $trasa->Stacja_poczatkowa }}</li>
            <li>Przystanek końcowy: {{ $trasa->Stacja_koncowa }}</li>
            <li>Czas podróży: {{ $trasa->Czas_podrozy }}</li>
            <!-- Dodaj inne potrzebne informacje o trasie -->
            <br>
        @endforeach
    </ul>
</body>
</html>
@endsection
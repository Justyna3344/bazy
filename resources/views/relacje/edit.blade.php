@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Relację</title>
    <link href="{{ asset('assets/css/editstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj Relację</h1>
    <form method="post" action="{{ route('relacje.update', ['relacja' => $relacja->idRelacje]) }}">
        @csrf
        @method('PUT')
        <div>
            <label>Nazwa:</label>
            <input type="text" name="Nazwa" placeholder="Nazwa" value="{{ $relacja->Nazwa }}" required />
        </div>
        <div>
            <button type="submit">Zaktualizuj</button>
        </div>
    </form>
    <div>
        <a href="{{ route('relacje.index') }}">Powrót</a>
    </div>
</body>
</html>
@endsection
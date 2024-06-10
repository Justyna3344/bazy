@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relacje</title>
    <link href="{{ asset('assets/css/indexstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Relacje</h1>
    <div class="add-wagon-link">
        <a href="{{ route('relacje.create') }}">Dodaj relacje</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Akcje</th>
            </tr>
            @foreach($relacje as $relacja)
                <tr>
                    <td>{{ $relacja->idRelacje }}</td>
                    <td>{{ $relacja->Nazwa }}</td>
                    <td>
                        <a href="{{ route('relacje.edit', ['relacja' => $relacja->idRelacje]) }}">Edytuj</a>
                        <form method="post" action="{{ route('relacje.destroy', ['relacja' => $relacja->idRelacje]) }}">
                            @csrf
                            @method('delete')
                            <button type="submit">Usuń</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
@endsection
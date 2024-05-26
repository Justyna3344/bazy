<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trasy</title>
    <link href="{{ asset ('assets/css/indexstyles.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Trasy</h1>
    <div class="add-wagon-link">
        <a href="{{ route('trasy.create') }}">Dodaj trasy</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Stacja początkowa</th>
                <th>Stacja końcowa</th>
                <th>Czas podróży</th>
                <th>Opóźnienie</th>
                <th>Trasa w km</th>
               
                <th>Godzina odjazdu</th>
                <th>Godzina przyjazdu</th>
                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
            @foreach($trasy as $trasa)
                <tr>
                    <td>{{ $trasa->id }}</td>
                    <td>{{ $trasa->Stacja_poczatkowa }}</td>
                    <td>{{ $trasa->Stacja_koncowa }}</td>
                    <td>{{ $trasa->Czas_podrozy }}</td>
                    <td>{{ $trasa->Opoznienie }}</td>
                    <td>{{ $trasa->Trasa_w_km }}</td>
                  
                    <td>{{ $trasa->Godzina_odjazdu }}</td>
                    <td>{{ $trasa->Godzina_przyjazdu }}</td>
                    <td>
                        <a href="{{ route('trasy.edit', ['trasy' => $trasa->id]) }}">Edycja</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('trasy.destroy', ['trasy' => $trasa->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="Usuń"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

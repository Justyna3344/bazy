<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista Lokomotyw</title>
    <link href="{{ asset('assets/css/indexstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Lokomotywy</h1>
    
    <div class="add-wagon-link">
        <a href="{{ route('lokomotywa.create') }}">Dodaj Lokomotywę</a>
    </div>
    
    <div>
        <table border="1">
            <tr>
                <th>lokomotywa_id</th>		
                <th>Nazwa</th>
                <th>Rok produkcji</th>
                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
            @foreach($lokomotywa as $lokomotywa)
                <tr>
                    <td>{{ $lokomotywa->id }}</td>
                    <td>{{ $lokomotywa->Nazwa }}</td>
                    <td>{{ $lokomotywa->Rok_produkcji }}</td>
                    <td>
                        <a href="{{ route('lokomotywa.edit', ['lokomotywa' => $lokomotywa->id]) }}">Edytuj</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('lokomotywa.destroy', ['lokomotywa' => $lokomotywa->id]) }}">
                            @csrf
                            @method('delete')
                            <input type="submit" value="usun"/>
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personel</title>
    <link href="{{ asset ('assets/css/indexstyles.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Personel</h1>
    <div class="add-wagon-link">
        <a href="{{ route('Relacja.create') }}">Dodaj personel</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                
                <th>Edytuj</th>
                <th>Usun</th>
            </tr>
            @foreach($relacja as $relacja)
                <tr>
                    <td>{{ $relacja->id }}</td>
                    <td>{{ $relacja->Nazwa }}</td>
                 
                    <td>
                        <a href="{{ route('Relacja.edit', ['relacja' => $relacja->id]) }}">Edycja</a>
                    </td>
                    <td>
        <form method="post" action="{{ route('Relacja.destroy', ['relacja' => $relacja->id]) }}">

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

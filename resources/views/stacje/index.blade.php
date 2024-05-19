<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacje</title>
    <link href="{{ asset('assets/css/indexstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Stacje</h1>
    <div class="add-wagon-link">
        <a href="{{ route('Stacje.create') }}">Dodaj stację</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Nazwa</th>
                <th>Liczba peronów</th>
                <th>Liczba torów</th>
                <th>Edytuj</th>
                <th>Usuń</th>
            </tr>
            @foreach($stacje as $stacja)
                <tr>
                    <td>{{ $stacja->id }}</td>
                    <td>{{ $stacja->Nazwa }}</td>
                    <td>{{ $stacja->l_peronow }}</td>
                    <td>{{ $stacja->l_torow }}</td>
                    <td>
                        <a href="{{ route('Stacje.edit', ['stacje' => $stacja->id]) }}">Edycja</a>
                    </td>
                    <td>
                        <form method="post" action="{{ route('Stacje.destroy', ['stacje' => $stacja->id]) }}">
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

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
        <a href="{{ route('Personel.create') }}">Dodaj personel</a>
    </div>
    <div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Rola</th>
                <th>Imie</th>
                <th>Nazwisko</th>
                <th>Email</th>
                <th>NR_telefonu</th>
                <th>Miasto</th>
                <th>Ulica</th>
                <th>NR_domu</th>
                <th>Pesel</th>
                <th>Edytuj</th>
                <th>Usun</th>
            </tr>
            @foreach($personel as $personel)
                <tr>
                    <td>{{ $personel->id }}</td>
                    <td>{{ $personel->Rola }}</td>
                    <td>{{ $personel->Imie }}</td>
                    <td>{{ $personel->Nazwisko }}</td>
                    <td>{{ $personel->Email }}</td>
                    <td>{{ $personel->NR_telefonu }}</td>
                    <td>{{ $personel->Miasto }}</td>
                    <td>{{ $personel->Ulica }}</td>
                    <td>{{ $personel->NR_domu }}</td>
                    <td>{{ $personel->Pesel }}</td>
                    <td>
                        <a href="{{ route('Personel.edit', ['personel' => $personel->id]) }}">Edycja</a>
                    </td>
                    <td>
        <form method="post" action="{{ route('Personel.destroy', ['personel' => $personel->id]) }}">

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

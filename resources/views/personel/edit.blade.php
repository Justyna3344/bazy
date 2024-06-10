@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj personel</title>
    <link href="{{ asset ('assets/css/editstyles.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj personel</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('Personel.update', ['personel' => $personel->id]) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Rola:</label>
            <input type="text" name="Rola" placeholder="Rola" value="{{ $personel->Rola }}" />
        </div>
        <div>
            <label>Imię:</label>
            <input type="text" name="Imie" placeholder="Imie" value="{{ $personel->Imie }}" />
        </div>
        <div>
            <label>Nazwisko:</label>
            <input type="text" name="Nazwisko" placeholder="Nazwisko" value="{{ $personel->Nazwisko }}" />
        </div>
        <div>
            <label>Email:</label>
            <input type="text" name="Email" placeholder="Email" value="{{ $personel->Email }}" />
        </div>
        <div>
            <label>Numer telefonu:</label>
            <input type="text" name="NR_telefonu" placeholder="NR_telefonu" value="{{ $personel->NR_telefonu }}" />
        </div>
        <div>
            <label>Miasto:</label>
            <input type="text" name="Miasto" placeholder="Miasto" value="{{ $personel->Miasto }}" />
        </div>
        <div>
            <label>Ulica:</label>
            <input type="text" name="Ulica" placeholder="Ulica" value="{{ $personel->Ulica }}" />
        </div>
        <div>
            <label>Numer domu:</label>
            <input type="text" name="NR_domu" placeholder="NR_domu" value="{{ $personel->NR_domu }}" />
        </div>
        <div>
            <label>Pesel:</label>
            <input type="text" name="Pesel" placeholder="Pesel" value="{{ $personel->Pesel }}" />
        </div>

        <div class="EdytujWagon">
        <input type="submit" value="Edytuj Presonel">
        </div>
    </form>
</body>
</html>
@endsection
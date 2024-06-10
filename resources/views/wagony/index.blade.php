@extends('layouts.app')

@section('content')

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('assets/css/indexstyles.css')}}" rel="stylesheet">


</head>
<body>
    <h1>Wagony</h1>
    <div class="add-wagon-link">
        <a  href="{{route('wagony.create')}}">Dodaj wagon</a>
    </div>
    <div>
        <table border="1">
        <tr>
            <th>ID</th>
            <th>Typ</th>
            <th>Klasa</th>
            <th>Miejsca</th>
            <th>Edytuj</th>
            <th>Usun</th>
        </tr>
        @foreach($wagony as $wagon)
    <tr>
        <td>{{$wagon->id}}</td>
        <td>{{$wagon->Typ}}</td>
        <td>{{$wagon->Klasa}}</td>
        <td>{{$wagon->Miejsca}}</td>
        <td>
        <a href="{{ route('wagony.edit', ['wagony' => $wagon->id]) }}">Edycja</a>
        </td>
        <td>
        <form method="post" action="{{ route('wagony.destroy', ['wagony' => $wagon->id]) }}">

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
@endsection
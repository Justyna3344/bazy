@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Przystanki dla trasy</h1>
    @foreach($trasy as $trasa)
        <h2>Trasa od {{ $trasa->Stacja_poczatkowa }} do {{ $trasa->Stacja_koncowa }}</h2>
        <table class="table">
            <thead>
                <tr>
                    <th>Stacja</th>
                    <th>Godzina przyjazdu</th>
                    <th>Godzina odjazdu</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $trasa->Stacja_poczatkowa }}</td>
                    <td>{{ $trasa->Godzina_przyjazdu }}</td>
                    <td>{{ $trasa->Godzina_odjazdu }}</td>
                </tr>
                <tr>
                    <td>{{ $trasa->Stacja_koncowa }}</td>
                    <td>{{ $trasa->Godzina_przyjazdu }}</td>
                    <td>{{ $trasa->Godzina_odjazdu }}</td>
                </tr>
            </tbody>
        </table>
    @endforeach
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Wybrane trasy</h1>
    <p>{{ $stacjaPoczatkowa }} >
     {{ $stacjaKoncowa }}</p>
    <p>Data: {{ $data }}</p>
    <div style="display: flex; justify-content: space-between;">
        <div>
            <p>Godzina odjazdu: {{ $godzinaOdjazdu }}</p>
            <p>Godzina przyjazdu: {{ $godzinaPrzyjazdu }}</p>
        </div>
    </div>
    <div style="float:right;">
        <a href="{{ route('kup_bilet') }}" style="color: blue;">Kup bilet</a>
    </div>
</div>
@endsection
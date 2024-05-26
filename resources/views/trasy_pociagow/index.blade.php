@extends('layouts.app')

@section('content')
<div class="container">
    <div style="display: flex; justify-content: space-between; align-items: center;">
        <div>
            <h1>Wybrane trasy</h1>
            <p>{{ $stacjaPoczatkowa }} > {{ $stacjaKoncowa }}</p>
            <p>Data: {{ $data }}</p>
            <div>
                <p>{{ $godzinaOdjazdu }}>
                 {{ $godzinaPrzyjazdu }}</p>
            </div>
        </div>
        <div style="margin-right: 20px;">
            <img src="{{ asset('images/information_10015217.png') }}" alt="Switch" width="20" height="20">
            <a href="{{ route('kup_bilet') }}" style="color: blue;">Kup bilet</a>
        </div>
    </div>
</div>
<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
@endsection

@extends('layouts.app')

@section('content')
<body style="background-color: #f0f0f0;">
<div class="container">
    <h1>Wybrane trasy dla</h1>
    <p>{{ $stacjaPoczatkowa }} > {{ $stacjaKoncowa }}</p>
    <p>Data: {{ $data }}</p>
    
    <div class="trasy-list">
        @foreach ($trasy as $trasa)
            <div class="trasa-item">
                <p>{{ $trasa->nazwa_trasy }}  {{ $trasa->Godzina_odjazdu }} > {{ $trasa->Godzina_przyjazdu }}</p>
                <div class="action">
                    <a href="{{ route('kup_bilet') }}" class="kup-bilet-btn">Kup bilet</a>
                    <a href="{{ route('przystanek') }}" class="info-link">
                        <img src="{{ asset('images/information_10015217.png') }}" alt="Info" width="20" height="20">
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>

<link rel="stylesheet" href="{{ asset('css/custom.css') }}">
<style>
    .trasy-list {
        margin-top: 20px;
    }

    .trasa-item {
        display: flex;
        justify-content: space-between;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        padding: 10px;
    }

    .action {
        display: flex;
        align-items: center;
    }

    .kup-bilet-btn {
        color: blue;
        text-decoration: none;
        margin-left: 10px;
    }

    .info-link {
        margin-left: 10px;
        text-decoration: none;
    }
</style>
@endsection

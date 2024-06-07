@extends('layouts.app')

@section('content')
<div class="container">
    <p>Z: {{ $stacjaPoczatkowa }}</p><hr>
    <p>Do: {{ $stacjaKoncowa }}</p><hr>
    <p>Data: {{ $data }}</p><hr>
    <p>Szczegóły połączenia</p><hr>

    <!-- Nazwa użytkownika -->
    <div class="user-info">
        <img class="user-icon" src="{{ asset('images/user_1177568.png') }}" alt="Ikona użytkownika" width="20" height="20">
        {{ Auth::user()->name }}
    </div>

    <!-- Przycisk Dodaj użytkownika -->
    <a class="btn-add-user" href="/dodaj-uzytkownika">+ Dodaj osobę</a>
</div>
@endsection

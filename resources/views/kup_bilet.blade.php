<!-- resources/views/trasy_pociagow/index.blade.php -->
@extends('layouts.app')

@section('content')
<div class="container">
    <p>Z </p><hr>
    <p>Do</p><hr>
    <p>Data </p><hr>
    <p>Szczegóły połączenia</p><hr>

    <!-- Nazwa użytkownika -->
    <div class="user-info" >
        <img class="user-icon" src="{{ asset('images/user_1177568.png') }}" alt="Ikona użytkownika" width="20" height="20">
        {{ Auth::user()->name }}
    </div>

    <!-- Przycisk Dodaj użytkownika -->
    <a class="btn-add-user" href="/dodaj-uzytkownika">+  Dodaj osobę</a>
</div>



@endsection

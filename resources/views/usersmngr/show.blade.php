@extends('layouts.app')

@section('content')

<div class="card" style="margin:20px;">

  <div class="card-header">Użytkownik</div>

  <div class="card-body">

    <div class="card-body">

      <h5 class="card-title">Imię: {{ $user->name }}</h5>

      <p class="card-text">Adres e-mail: {{ $user->email }}</p>

      <p class="card-text">
    Typ użytkownika: 
    @if($user->usertype == 'user')
        Zwykły użytkownik
    @elseif($user->usertype == 'admin')
        Administrator
    @else
        Nieznany typ użytkownika
    @endif
      </p>

      <p class="card-text">Ostatnie logowanie: {{ $user->last_login }}</p>

      <p class="card-text">Data utworzenia konta: {{ $user->created_at }}</p>

    </div>

  </div>

</div>

@endsection

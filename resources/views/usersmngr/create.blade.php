@extends('layouts.app')

@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Dodaj nowego użytkownika</div>
  <div class="card-body">
       
      <form action="{{ route('usersmngr.store') }}" method="post">
        @csrf
        <div class="form-group">
          <label for="name">Imię</label>
          <input type="text" name="name" id="name" class="form-control">
        </div>
        <div class="form-group">
          <label for="email">Adres e-mail</label>
          <input type="email" name="email" id="email" class="form-control" required>
        </div>
        <div class="form-group">
          <label for="password">Hasło</label>
          <input type="password" name="password" id="password" class="form-control">
        </div>
        <div class="form-group">
          <label for="usertype">Typ użytkownika</label>
          <input type="text" name="usertype" id="usertype" class="form-control">
        </div>
        <button type="submit" class="btn btn-success">Zapisz</button>
      </form>
    
  </div>
</div>
  
@stop

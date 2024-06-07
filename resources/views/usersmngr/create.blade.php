@extends('layouts.app')
@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Dodaj nowego użytkownika</div>
  <div class="card-body">
       
      <form action="{{ route('usersmngr.store') }}" method="post">
        @csrf
        <label>Imie</label></br>
        <input type="text" name="name" id="name" class="form-control"></br>
        <label>Adres e-mail</label></br>
        <input type="text" name="email" id="email" class="form-control"></br>
        <label>Hasło</label></br>
        <input type="password" name="password" id="password" class="form-control"></br>
        <label>Typ użytkownika</label></br>
        <input type="text" name="usertype" id="usertype" class="form-control"></br>
        <input type="submit" value="Save" class="btn btn-success"></br>
      </form>
    
  </div>
</div>
  
@stop

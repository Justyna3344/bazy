@extends('layouts.app')

@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Dodawanie biletów</div>
  <div class="card-body">
       
      <form action="{{ url('tickets') }}" method="post">
        {!! csrf_field() !!}
        
        <label>Rodzaj pociągu:</label><br>
        <select name="train_type" id="train_type" class="form-control">
            <option value="ekspresowy">Ekspresowy</option>
            <option value="intercity">InterCity</option>
            <option value="cargo">Cargo</option>
        </select><br>
        
        <label>Przystanek początkowy:</label><br>
        <input type="text" name="departure_station" id="departure_station" class="form-control"><br>
        
        <label>Przystanek docelowy:</label><br>
        <input type="text" name="arrival_station" id="arrival_station" class="form-control"><br>
        
        <label>Data i godzina odjazdu:</label><br>
        <input type="datetime-local" name="departure_time" id="departure_time" class="form-control"><br>
        
        <label>Ilość biletów:</label><br>
        <input type="number" name="ticket_quantity" id="ticket_quantity" class="form-control" min="1"><br>
        
        <label>Cena:</label><br>
        <input type="text" name="price" id="price" class="form-control"><br>
        
        <input type="submit" value="Zapisz" class="btn btn-success"><br>
    </form>
    
  </div>
</div>

@stop

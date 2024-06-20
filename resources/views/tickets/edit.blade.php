@extends('layouts.app')

@section('content')

<div class="card" style="margin:20px;">
  <div class="card-header">Edycja biletu</div>
  <div class="card-body">
       
      <form action="{{ url('tickets/' . $tickets->id) }}" method="post">
        @csrf
        @method('PATCH')
        <input type="hidden" name="id" value="{{ $tickets->id }}">
        
        <label>Rodzaj pociągu:</label><br>
        <select name="train_type" id="train_type" class="form-control">
            <option value="ekspresowy" {{ $tickets->train_type == 'ekspresowy' ? 'selected' : '' }}>Ekspresowy</option>
            <option value="intercity" {{ $tickets->train_type == 'intercity' ? 'selected' : '' }}>InterCity</option>
            <option value="cargo" {{ $tickets->train_type == 'cargo' ? 'selected' : '' }}>Cargo</option>
        </select><br>
        
        <label>Przystanek początkowy:</label><br>
        <input type="text" name="departure_station" id="departure_station" class="form-control"><br>
        
        <label>Przystanek docelowy:</label><br>
        <input type="text" name="arrival_station" id="arrival_station" class="form-control"><br>
        
        <label>Data i godzina odjazdu:</label><br>
        <input type="datetime-local" name="departure_time" value="{{ date('Y-m-d\TH:i', strtotime($tickets->departure_time)) }}" class="form-control"><br>
        
        <label>Ilość biletów:</label><br>
        <input type="number" name="ticket_quantity" value="{{ $tickets->ticket_quantity }}" class="form-control" min="1"><br>
        
        <label>Cena:</label><br>
        <input type="text" name="price" value="{{ $tickets->price }}" class="form-control"><br>
        
        <input type="submit" value="Zapisz" class="btn btn-success"><br>
    </form>
    
  </div>
</div>

@stop

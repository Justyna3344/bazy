create.blade.php

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('assets/css/createstyles.css')}}" rel="stylesheet">
</head>
<body>
<h1>Dodaj trasy</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach    
            </ul>
        @endif
    </div>
    <form method="post" action="{{route('Trasy.store')}}">
        @csrf
        @method('post')
        <div>
            <label>Stacja początkowa</label>
            <select name="Stacja_poczatkowa" class="form-control" required>
                <option value="">Wybierz stację początkową</option>
                @foreach($stacje as $stacja)
                    <option value="{{ $stacja->Nazwa }}">{{ $stacja->Nazwa }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Stacja końcowa</label>
            <select name="Stacja_koncowa" class="form-control" required>
                <option value="">Wybierz stację końcową</option>
                @foreach($stacje as $stacja)
                    <option value="{{ $stacja->Nazwa }}">{{ $stacja->Nazwa }}</option>
                @endforeach
            </select>
        </div>
        <div>
            <label>Czas podróży</label>
            <input type="text" name="Czas_podrozy" placeholder="Czas podróży" value="{{ old('Czas_podrozy') ?? '' }}"/>
        </div>
        <div>
            <label>Opoznienie</label>
            <input type="text" name="Opoznienie" placeholder="Opóźnienie" value="{{ old('Opoznienie') ?? '' }}"/>
        </div>
        <div>
            <label>Trasa w km</label>
            <input type="text" name="Trasa_w_km" placeholder="Trasa w km" value="{{ old('Trasa_w_km') ?? '' }}"/>
        </div>
       
        
        <div>
    <label>Godzina odjazdu</label>
    <input type="time" name="Godzina_odjazdu" placeholder="Godzina odjazdu" value="{{ old('Godzina_odjazdu') ?? '' }}"/>
</div>
<div>
    <label>Godzina przyjazdu</label>
    <input type="time" name="Godzina_przyjazdu" placeholder="Godzina przyjazdu" value="{{ old('Godzina_przyjazdu') ?? '' }}"/>
</div>
<div class="DodajWagon">
            <input type="submit" value="Dodaj trasy">
        </div>
    </form>
</body>
</html>

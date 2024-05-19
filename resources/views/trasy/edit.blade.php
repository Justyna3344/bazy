<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj trasy</title>
    <link href="{{ asset('assets/css/editstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj trasy</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('Trasy.update', ['trasy' => $trasa->id]) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Stacja początkowa:</label>
            <input type="text" name="Stacja_poczatkowa" placeholder="Stacja początkowa" value="{{ $trasa->Stacja_poczatkowa }}" />
        </div>
        <div>
            <label>Stacja końcowa:</label>
            <input type="text" name="Stacja_koncowa" placeholder="Stacja końcowa" value="{{ $trasa->Stacja_koncowa }}" />
        </div>
        <div>
            <label>Czas podróży:</label>
            <input type="text" name="Czas_podrozy" placeholder="Czas podróży" value="{{ $trasa->Czas_podrozy }}" />
        </div>
        <div>
            <label>Opóźnienie:</label>
            <input type="text" name="Opoznienie" placeholder="Opóźnienie" value="{{ $trasa->Opoznienie }}" />
        </div>
        <div>
            <label>Trasa w km:</label>
            <input type="text" name="Trasa_w_km" placeholder="Trasa w km" value="{{ $trasa->Trasa_w_km }}" />
        </div>
        <div>
            <label>Cała Trasa ID:</label>
            <input type="text" name="Cała_Trasa_idCała_Trasa" placeholder="Cała Trasa ID" value="{{ $trasa->Cała_Trasa_idCała_Trasa }}" />
        </div>
        <div>
        <div>
        <div>
    <label>Godzina odjazdu:</label>
    <input type="text" name="Godzina_odjazdu" value="{{ old('Godzina_odjazdu', $trasa->Godzina_odjazdu) }}">
</div>
<div>
    <label>Godzina przyjazdu:</label>
    <input type="text" name="Godzina_przyjazdu" value="{{ old('Godzina_przyjazdu', $trasa->Godzina_przyjazdu) }}">
</div>


        <div class="EdytujWagon">
            <input type="submit" value="Edytuj trasy">
        </div>
    </form>
</body>
</html>

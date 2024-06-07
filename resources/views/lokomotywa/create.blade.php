<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Lokomotywę</title>
    <link href="{{ asset('assets/css/createstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Dodaj Lokomotywę</h1>
    
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('lokomotywa.store') }}">
        @csrf
        @method('post')
        <div>
            <label for="typ">Typ:</label>
            <input type="text" id="Nazwa" name="Nazwa" placeholder="Nazwa" value="{{ old('Nazwa') }}">
        </div>
        <div>
            <label for="klasa">Klasa:</label>
            <input type="text" id="Rok_produkcji" name="Rok_produkcji" placeholder="Rok_produkcji" value="{{ old('Rok_produkcji') }}">
        </div>
        <div class="DodajWagon">
        <input type="submit" value="Dodaj Lokomotywe">
        </div>
    </form>
</body>
</html>

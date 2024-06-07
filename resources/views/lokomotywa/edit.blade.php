<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj Lokomotywę</title>
    <link href="{{ asset('assets/css/editstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj Lokomotywę</h1>
    
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('lokomotywa.update', ['lokomotywa' => $lokomotywa->id]) }}">
        @csrf
        @method('PUT')

        <div>
            <label for="nazwa">Nazwa:</label>
            <input type="text" id="nazwa" name="Nazwa" placeholder="Nazwa" value="{{ $lokomotywa->Nazwa }}">
        </div>
        <div>
            <label for="rok_produkcji">Rok produkcji:</label>
            <input type="text" id="rok_produkcji" name="Rok_produkcji" placeholder="Rok produkcji" value="{{ $lokomotywa->Rok_produkcji }}">
        </div>
        <div class="EdytujWagon">
        <input type="submit" value="Edytuj Lokomotywe">
        </div>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj relacje</title>
    <link href="{{ asset('assets/css/createstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Dodaj relacje</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>
    <form method="post" action="{{ route('relacje.store') }}">
        @csrf
        <div>
            <label>Nazwa:</label>
            <input type="text" name="Nazwa" placeholder="Nazwa"/>
        </div>
        <div class="DodajWagon">
            <button type="submit">Dodaj relacje</button>
        </div>
    </form>
</body>
</html>

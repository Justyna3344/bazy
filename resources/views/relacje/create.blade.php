<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodaj Relację</title>
    <link href="{{ asset('assets/css/createstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Dodaj Relację</h1>
    <form method="post" action="{{ route('relacje.store') }}">
        @csrf
        <div>
            <label>Nazwa:</label>
            <input type="text" name="Nazwa" placeholder="Nazwa" required />
        </div>
        <div>
            <button type="submit">Dodaj</button>
        </div>
    </form>
</body>
</html>

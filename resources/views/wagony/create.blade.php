<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('assets/css/createstyles.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Dodaj wagon</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach    
            </ul>

        @endif
    </div>
    <form method="post" action="{{route('wagony.store')}}">
        @csrf
        @method('post')
        <div>
            <label></label>
            <input type="text" name="Typ" placeholder="Typ"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Klasa" placeholder="Klasa"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Miejsca" placeholder="Miejsca"/>
        </div>
        <div class="DodajWagon">
            <input type="submit" value="Dodaj Wagon">
        </div>
    </form>
</body>
</html>
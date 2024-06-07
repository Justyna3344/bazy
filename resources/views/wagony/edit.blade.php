<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('assets/css/editstyles.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj wagon</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach    
            </ul>

        @endif
    </div>
    <form method="post" action="{{route('wagony.update', ['wagony' => $wagony])}}">
        @csrf
        @method('put')
        <div>
            <label></label>
            <input type="text" name="Typ" placeholder="Typ" value="{{$wagony->Typ}}"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Klasa" placeholder="Klasa" value="{{$wagony->Klasa}}"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Miejsca" placeholder="Miejsca" value="{{$wagony->Miejsca}}"/>
        </div>
        <div class="EdytujWagon">
            <input type="submit" value="Edytuj Wagon">
        </div>
    </form>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj relacje</title>
    <link href="{{ asset ('assets/css/editstyles.css')}}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj relacje</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('Relacje.update', ['relacje' => $relacje->idRelacje]) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Rola:</label>
            <input type="text" name="Nazwa" placeholder="Rola" value="{{ $relacja->Nazwa }}" />
        </div>
       

        <div class="EdytujWagon">
        <input type="submit" value="Edytuj relacje">
        </div>
    </form>
</body>
</html>

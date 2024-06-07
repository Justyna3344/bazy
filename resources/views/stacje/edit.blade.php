<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edytuj stację</title>
    <link href="{{ asset('assets/css/editstyles.css') }}" rel="stylesheet">
</head>
<body>
    <h1>Edytuj stację</h1>

    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach    
            </ul>
        @endif
    </div>

    <form method="post" action="{{ route('Stacje.update', ['stacje' => $stacje->id]) }}">
        @csrf
        @method('PUT')

        <div>
            <label>Nazwa:</label>
            <input type="text" name="Nazwa" placeholder="Nazwa" value="{{ old('Nazwa', $stacje->Nazwa) }}" />
        </div>
        <div>
            <label>Liczba peronów:</label>
            <input type="text" name="l_peronow" placeholder="Liczba peronów" value="{{ old('l_peronow', $stacje->l_peronow) }}" />
        </div>
        <div>
            <label>Liczba torów:</label>
            <input type="text" name="l_torow" placeholder="Liczba torów" value="{{ old('l_torow', $stacje->l_torow) }}" />
        </div>

        <div class="EdytujWagon">
            <input type="submit" value="Edytuj stację">
        </div>
    </form>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="{{ asset ('assets/css/createstyles.css')}}" rel="stylesheet">
</head>
<body>
<h1>Dodaj personel</h1>
    <div>
        @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach    
            </ul>

        @endif
    </div>
    <form method="post" action="{{route('Personel.store')}}">
        @csrf
        @method('post')
        <div>
            <label></label>
            <input type="text" name="Rola" placeholder="Rola"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Imie" placeholder="Imie"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Nazwisko" placeholder="Nazwisko"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Email" placeholder="Email"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="NR_telefonu" placeholder="NR_telefonu"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Miasto" placeholder="Miasto"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Ulica" placeholder="Ulica"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="NR_domu" placeholder="NR_domu"/>
        </div>
        <div>
            <label></label>
            <input type="text" name="Pesel" placeholder="Pesel"/>
        </div>
        <div class="DodajWagon">
            <input type="submit" value="Dodaj personel">
        </div>
    </form>
</body>
</html>
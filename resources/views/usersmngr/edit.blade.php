@extends('layouts.app')

@section('content')
  
<div class="card" style="margin:20px;">
  <div class="card-header">Edytuj</div>
  <div class="card-body">
       
      <form action="{{ route('usersmngr.update', $user->id) }}" method="post">
        @csrf
        @method("PATCH")
        <input type="hidden" name="id" value="{{ $user->id }}">
        <label>Imię:</label><br>
        <input type="text" name="name" value="{{ $user->name }}" class="form-control"><br>
        <label>Adres e-mail:</label><br>
        <input type="text" name="email" value="{{ $user->email }}" class="form-control"><br>
        <label>Hasło:</label><br>
        <div class="input-group">
            <input type="password" name="password" value="{{ $user->password }}" class="form-control" id="password-input">
            <button class="btn btn-outline-secondary" type="button" id="password-toggle"><i class="fa fa-eye"></i></button>
        </div><br>
        <label>Typ użytkownika:</label><br>
        <select name="usertype" class="form-control">
            <option value="user" {{ $user->usertype === 'user' ? 'selected' : '' }}>Zwykły użytkownik</option>
            <option value="admin" {{ $user->usertype === 'admin' ? 'selected' : '' }}>Administrator</option>
        </select><br>
        <input type="submit" value="Zapisz" class="btn btn-success"><br>
    </form>
    
  </div>
</div>

<script>
    document.getElementById("password-toggle").addEventListener("click", function() {
        var passwordInput = document.getElementById("password-input");
        var passwordToggle = document.getElementById("password-toggle");

        if (passwordInput.type === "password") {
            passwordInput.type = "text";
            passwordToggle.innerHTML = '<i class="fa fa-eye-slash"></i>';
        } else {
            passwordInput.type = "password";
            passwordToggle.innerHTML = '<i class="fa fa-eye"></i>';
        }
    });
</script>
  
@endsection

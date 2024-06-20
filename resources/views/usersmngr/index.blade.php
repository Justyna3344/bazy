@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row" style="margin:20px;">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          <h2>Dodawanie użytkowników</h2>
        </div>
        <div class="card-body">
          <a href="{{ route('usersmngr.create') }}" class="btn btn-success btn-sm" title="Dodaj użytkownika">Dodaj</a>
          <br/>
          <br/>
          <div class="table-responsive">
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Imię</th>
                  <th>Adres e-mail</th>
                  <th>Typ użytkownika</th>
                  <th>Zarządzaj</th>
                </tr>
              </thead>
              <tbody>
                @foreach($users as $item)
                <tr>
                  <td>{{ $item->id }}</td>
                  <td>{{ $item->name }}</td>
                  <td>{{ $item->email }}</td>
                  <td>@if($item->usertype == 'user')
                    Zwykły użytkownik
                      @elseif($item->usertype == 'admin')
                    Administrator
                      @else
                    Nieznany typ użytkownika
                    @endif</td>
                  <td>
                    <a href="{{ route('usersmngr.show', $item->id) }}" title="Szczegóły">
                      <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> Szczegóły</button>
                    </a>
                    <a href="{{ route('usersmngr.edit', $item->id) }}" title="Edycja">
                      <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edytuj</button>
                    </a>
                    <form method="POST" action="{{ route('usersmngr.destroy', $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-danger btn-sm" title="Usuń użytkownika" onclick="return confirm('Czy na pewno chcesz usunąć?')">
                        <i class="fa fa-trash-o" aria-hidden="true"></i> Usuń
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

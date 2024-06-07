<!-- home.blade.php -->

@extends('layouts.app')

@section('content')
<body style="background-color: #f0f0f0;">
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="text-center mb-4">
                <h1>Rozkład jazdy PKP i bilety!</h1>
                <h2>Wyszukaj połączenie</h2>
            </div>
            <div class="container1">
                <div class="row justify-content-center">
                    <div class="col-md-12">
                        <form action="{{ route('trasy_pociagow.szukaj') }}" method="GET" class="form-inline mb-4 d-flex align-items-center">
                            @csrf
                            <div class="form-group mr-2">
                            <select name="from" id="from" class="form-control" placeholder="Z">
    <option value="">Wybierz stację początkową</option>
    @foreach($trasy->pluck('Stacja_poczatkowa')->unique() as $stacja)
        <option value="{{ $stacja }}">{{ $stacja }}</option>
    @endforeach
</select>
                            </div>
                            <button type="button" id="switchBtn" class="btn btn-secondary mr-2">
                                <img src="{{ asset('images/arrows_7846830.png') }}" alt="Switch" width="20" height="20">
                            </button>
                            <div class="form-group mr-2">
                            <select name="to" id="to" class="form-control" placeholder="DO">
    <option value="">Wybierz stację docelową</option>
    @foreach($trasy->pluck('Stacja_koncowa')->unique() as $stacja)
        <option value="{{ $stacja }}">{{ $stacja }}</option>
    @endforeach
</select>
                            </div>
                            <div class="form-group mr-2">
                                <input type="date" name="date" id="date" class="form-control" placeholder="Kiedy?">
                            </div>
                            <button type="submit" class="btn btn-primary">Wyszukaj połączenia</button>
                        </form>
                    </div>
                </div>
            </div>

            <div class="mt-4 mb-2 text-center font-weight-bold">
                <h2>Dlaczego Pociągex?</h2>
            </div>
            <p class="text-center">Jest to jedna z lepszych stron do wyszukiwania połączeń.</p>
            <p class="text-center">Marzy Ci się wycieczka z Krakowa nad Polskie morze?</p>
            <p class="text-center">Nie ma problemu wyszukamy najlepsze i najszybsze połączenie.</p>
        </div>
    </div>
</div>

<p class="text-center">Od 2024 roku zaufało nam już 2020 klientów!</p>
<div class="text-center mt-4">
    <a href="{{ route('contact') }}">Kontakt</a>
</div>

<script>
    document.getElementById('switchBtn').addEventListener('click', function() {
        var fromValue = document.getElementById('from').value;
        var toValue = document.getElementById('to').value;
        document.getElementById('from').value = toValue;
        document.getElementById('to').value = fromValue;
    });
</script>
@endsection

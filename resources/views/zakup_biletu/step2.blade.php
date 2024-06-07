<form action="{{ route('zakup-biletu.store') }}" method="POST">
    @csrf

    <div>
        <label for="ulga">Wybierz ulgę:</label>
        <select name="ulga_id" id="ulga">
            @foreach($znizki as $znizka)
                <option value="{{ $znizka->id }}">{{ $znizka->nazwa }} ({{ $znizka->wartosc_procentowa }}%)</option>
            @endforeach
        </select>
    </div>

    <button type="submit">Dalej</button>
</form>

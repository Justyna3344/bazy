<?php

namespace App\Http\Controllers;

use App\Models\Znizka;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ZakupBiletuController extends Controller
{
    // Metoda dla pierwszego kroku
    public function step1()
    {
        $stacjaPoczatkowa = 'Warszawa'; // Przykładowe dane
        $stacjaKoncowa = 'Kraków'; // Przykładowe dane
        $data = '2024-06-01'; // Przykładowe dane

        return view('zakup_biletu.step1', compact('stacjaPoczatkowa', 'stacjaKoncowa', 'data'));
    }

    // Metoda dla drugiego kroku
    public function step2()
    {
        $znizki = Znizka::all(); // Pobierz wszystkie zniżki z bazy danych
    
        return view('zakup_biletu.step2', compact('znizki'));
    }
    

    // Metoda dla zapisywania wybranej ulgi
  // Metoda dla zapisywania wybranej ulgi
  public function store(Request $request)
  {
      $request->validate([
          'ulga_id' => 'required|exists:znizki,id',
      ]);
  
      // Pobierz aktualnie zalogowanego użytkownika
      $user = Auth::user();
  
      // Pobierz wybraną ulgę z bazy danych
      $znizka = Znizka::findOrFail($request->ulga_id);
  
      // Sprawdź, czy użytkownik już posiada tę zniżkę
      if ($user->znizki()->where('znizki.id', $znizka->id)->exists()) {
          return redirect()->route('home')->with('error', 'Użytkownik już ma tę zniżkę.');
      }
  
      // Przypisz wybraną zniżkę do użytkownika
      $user->znizki()->attach($znizka);
  
      // Przekieruj użytkownika gdziekolwiek chcesz
      dd('Zniżka została zapisana pomyślnie.');
  }
    
}

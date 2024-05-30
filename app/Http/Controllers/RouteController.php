<?php

namespace App\Http\Controllers;

use App\Models\CalaTrasa;
use Illuminate\Http\Request;
use App\Models\Trasy;

class RouteController extends Controller{


 
    public function showRouteStops($calaTrasaId)
    {
        // Pobieranie wszystkich tras dla danej trasy
        $trasy = Trasy::where('cala_trasa_id', $calaTrasaId)->get();
    
        // Tworzenie pustej tablicy na nazwy przystanków
        $przystanki = [];
    
        // Iteracja przez każdą trasę i dodanie przystanków do tablicy
        foreach ($trasy as $trasa) {
            $przystanki[] = $trasa->Stacja_poczatkowa;
            $przystanki[] = $trasa->Stacja_koncowa;
        }
    
        // Usunięcie duplikatów i sortowanie alfabetyczne
        $przystanki = array_unique($przystanki);
        sort($przystanki);
    
        // Przekazanie danych do widoku
        return view('route.stops', compact('trasy'));
    }
}
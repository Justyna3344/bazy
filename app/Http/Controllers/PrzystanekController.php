<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalaTrasa;
use App\Models\Trasy;

class PrzystanekController extends Controller
{
    public function index()
    {
        $przystanki = CalaTrasa::join('trasy', 'cala_trasa.id', '=', 'trasy.cala_trasa_id')
            ->select(
                'trasy.Stacja_poczatkowa as stacja_poczatek',
                'trasy.Stacja_koncowa as stacja_koniec',
                'trasy.Godzina_przyjazdu as godzina_przyjazdu',
                'trasy.Godzina_odjazdu as godzina_odjazdu',
                'trasy.Opoznienie as opoznienie',
                'trasy.Czas_podrozy as czas_podrozy'
            )
            ->orderByRaw("ADDTIME(trasy.Godzina_przyjazdu, SEC_TO_TIME(trasy.Opoznienie))")
            ->get();
    
        // Konwersja kolekcji na format JSON
        $przystankiJson = $przystanki->toJson();
    
        return view('przystanki.index', compact('przystankiJson'));
    }
    
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trasy;
use App\Models\Bilet;

class TrasyPociagowController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $trasy = Trasy::all();
        $stacjaPoczatkowa = null; // Ustawiamy wartość początkową na null
        $stacjaKoncowa = null; // Ustawiamy wartość początkową na null
        $data = null; // Ustawiamy wartość początkową na null
        $godzinaOdjazdu = null; // Ustawiamy wartość początkową na null
        $godzinaPrzyjazdu = null; // Ustawiamy wartość początkową na null
    
        return view('trasy_pociagow.index', compact('trasy', 'stacjaPoczatkowa', 'stacjaKoncowa', 'data', 'godzinaOdjazdu', 'godzinaPrzyjazdu'));
    }
    public function szukaj(Request $request)
    {
        $stacjaPoczatkowa = $request->input('from');
        $stacjaKoncowa = $request->input('to');
        $data = $request->input('date');
    
        $trasa = Trasy::where('Stacja_poczatkowa', $stacjaPoczatkowa)
                      ->where('Stacja_koncowa', $stacjaKoncowa)
                      ->first();
    
        if ($trasa) {
            $godzinaOdjazdu = $trasa->godzina_odjazdu;
            $godzinaPrzyjazdu = $trasa->godzina_przyjazdu;
    
            return view('trasy_pociagow.index', compact('stacjaPoczatkowa', 'stacjaKoncowa', 'data', 'godzinaOdjazdu', 'godzinaPrzyjazdu'));
        } else {
            return redirect()->back()->with('error', 'Nie znaleziono trasy dla podanych stacji.');
        }
    }
    
    public function kupBilet()
    {
        $bilety = Bilet::with('uzytkownik')->get();
        return view('kup_bilet', ['bilety' => $bilety]);
    }
    
    }



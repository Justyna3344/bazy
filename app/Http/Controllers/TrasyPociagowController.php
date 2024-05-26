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
        $stacjaPoczatkowa = null; 
        $stacjaKoncowa = null; 
        $data = null; 
        $godzinaOdjazdu = null; 
        $godzinaPrzyjazdu = null; 
    
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
            $godzinaOdjazdu = $trasa->Godzina_odjazdu;
            $godzinaPrzyjazdu = $trasa->Godzina_przyjazdu;
    
            return view('trasy_pociagow.index', compact('stacjaPoczatkowa', 'stacjaKoncowa', 'data', 'godzinaOdjazdu', 'godzinaPrzyjazdu'));
        } else {
            return redirect()->back()->with('error', 'Nie znaleziono trasy dla podanych stacji.');
        }
    }
    
    public function kupBilet(Request $request)
{
    
    $stacjaPoczatkowa = $request->input('from');
    $stacjaKoncowa = $request->input('to');
    $data = $request->input('date');
    $godzinaOdjazdu = $request->input('godzina_odjazdu');
    $godzinaPrzyjazdu = $request->input('godzina_przyjazdu');




    return view('kup_bilet', compact('stacjaPoczatkowa', 'stacjaKoncowa', 'data', 'godzinaOdjazdu', 'godzinaPrzyjazdu'));
}

    public function showKupBilet()
    {
        $bilety = Bilet::with('uzytkownik')->get();
        return view('kup_bilet', ['bilety' => $bilety]);
    }
    
}

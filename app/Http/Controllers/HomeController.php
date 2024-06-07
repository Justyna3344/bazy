<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // Importuj klasę DB
use App\Models\Trasy;

class HomeController extends Controller
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
        return view('home', compact('trasy'));
    }

    public function szczegoly(Request $request)
    {
        $id_trasy = $request->input('id_trasy'); // Pobierz id trasy z żądania
    
        // Tutaj możesz zaimplementować logikę pobierania szczegółowych danych trasy na podstawie $id_trasy
    
        // Na razie przekierujemy użytkownika z powrotem do widoku szczegółów trasy, zakładając, że widok ten istnieje i nazywa się 'szczegoly.blade.php'
        return view('trasy_pociagow.szczegoly');
    }
    
}

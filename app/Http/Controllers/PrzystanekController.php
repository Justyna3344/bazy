<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrzystanekController extends Controller
{
    public function index()
    {
        // Przykładowe dane trasy: id_trasy => [przystanki]
        $trasyPrzystanki = [
            6 => ['Ptaszkowa', 'Nowy Sącz', 'Kraków'],
        
            // Tutaj możesz dodać więcej tras z przystankami
        ];

        return view('przystanki.index', compact('trasyPrzystanki'));
    }
}

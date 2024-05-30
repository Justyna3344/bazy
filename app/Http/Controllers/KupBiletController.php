<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trasa;

class KupBiletController extends Controller
{
    public function index()
    {
        // Pobierz wszystkie trasy z tabeli 'trasy'
        $trasy = Trasa::all();

        // Przekazanie danych do widoku
        return view('kup_bilet', ['trasy' => $trasy]);
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relacje;

class RelacjeController extends Controller
{
    public function getRelacjeByTrasa($trasaId)
    {
        $relacje = Relacje::where('trasa_id', $trasaId)->get();
        return response()->json($relacje);
    }
    public function index(){
        $relacje = Relacje::all();
        return view('relacje.index', ['relacje' => $relacje]);
    }

    public function create(){
        return view('relacje.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Nazwa' => 'required',
        ]);

        Relacje::create($data);

        return redirect(route('relacje.index'));
    }

    public function show($id)
{
    // Pobierz relację
    $relacja = Relacje::findOrFail($id);

    // Pobierz wszystkie trasy dla danej relacji wraz z przystankami
    $trasy = Trasy::where('cala_trasa_id', $relacja->id)->get();

    // Przekazanie danych do widoku
    return view('relacje.show', compact('relacja', 'trasy'));
}

    public function edit(Relacje $relacja){
        return view('relacje.edit', ['relacja' => $relacja]);
    }

    public function update(Relacje $relacja, Request $request){
        $data = $request->validate([
            'Nazwa' => 'required',
        ]);

        $relacja->update($data);

        return redirect(route('relacje.index'))->with('success', 'Relacja zaktualizowana pomyślnie');
    }

    public function destroy(Relacje $relacja){
        $relacja->delete();
        return redirect(route('relacje.index'))->with('success', 'Relacja usunięta pomyślnie');
    }
    
}


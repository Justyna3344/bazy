<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stacje;

class StacjeController extends Controller
{
    public function index(){
        $stacje = Stacje::all();
        return view('stacje.index', ['stacje' => $stacje]);
    }

    public function create(){
        return view('stacje.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Nazwa' => 'required',
            'l_peronow' => 'required',
            'l_torow' => 'required|numeric',
        ]);

        $newStacja = Stacje::create($data);

        return redirect(route('stacje.index'));
    }

    public function edit(Stacje $stacje){
        return view('stacje.edit', ['stacje' => $stacje]);
    }

    public function update(Stacje $stacje, Request $request){
        $data = $request->validate([
            'Nazwa' => 'required',
            'l_peronow' => 'required',
            'l_torow' => 'required|numeric',
        ]);

        $stacje->update($data);

        return redirect(route('stacje.index'))->with('success', 'Stacja zaktualizowana pomyślnie');
    }

    public function destroy(Stacje $stacje){
        $stacje->delete();
        return redirect(route('stacje.index'))->with('success', 'Stacja usunięta pomyślnie');
    }
}

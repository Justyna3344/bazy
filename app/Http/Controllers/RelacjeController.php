<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Relacje;

class RelacjeController extends Controller
{
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

        $newRelacje = Relacje::create($data);

        return redirect(route('Relacje.index'));
    }

    public function edit(Relacje $relacje){
        return view('relacje.edit', ['relacje' => $relacje]);
    }

    public function update(Relacje $relacje, Request $request){
        $data = $request->validate([
            'Nazwa' => 'required',
          
        ]);

        $personel->update($data);

        return redirect(route('Relacje.index'))->with('success', 'relacje zedytowano pomyslnie');
    }

    public function destroy(Relacje $relacje){
        $relacje->delete();
        return redirect(route('Relacje.index'))->with('success', 'relacje usunieto pomyslnie');
    }
}

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

        Relacje::create($data);

        return redirect(route('relacje.index'));
    }

    public function show(Relacje $relacja){
        return view('relacje.show', ['relacja' => $relacja]);
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


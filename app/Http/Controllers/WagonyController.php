<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\wagony;

class WagonyController extends Controller
{
    public function index(){
        $wagony = wagony::all();
        return view('wagony.index', ['wagony' => $wagony]);
        
    }

    public function create(){
        return view('wagony.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Typ' => 'required',
            'Klasa' => 'required',
            'Miejsca' => 'required|numeric',
        ]);

        $newWagon = wagony::create($data);

        return redirect(route('wagony.index'));
    }

    public function edit(wagony $wagony){
        return view('wagony.edit', ['wagony' => $wagony]);
    }

    public function update(wagony $wagony, Request $request){
        $data = $request->validate([
            'Typ' => 'required',
            'Klasa' => 'required',
            'Miejsca' => 'required|numeric',
        ]);

        $wagony->update($data);

        return redirect(route('wagony.index'))->with('success', 'Wagon zedytowano pomyslnie');
    }    

    public function destroy(wagony $wagony){
        $wagony->delete();
        return redirect(route('wagony.index'))->with('success', 'Wagon usunieto pomyslnie');
    }
}

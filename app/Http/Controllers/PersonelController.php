<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personel;

class PersonelController extends Controller
{
    public function index(){
        $personel = Personel::all();
        return view('personel.index', ['personel' => $personel]);
    }

    public function create(){
        return view('personel.create');
    }

    public function store(Request $request){
        $data = $request->validate([
            'Rola' => 'required',
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'Email'=> 'required',
            'NR_telefonu'=> 'required|numeric',
            'Miasto'=> 'required',
            'Ulica'=> 'required',
            'NR_domu'=> 'required|numeric',
            'Pesel'=> 'required|numeric',
        ]);

        $newPersonel = personel::create($data);

        return redirect(route('Personel.index'));
    }

    public function edit(Personel $personel){
        return view('personel.edit', ['personel' => $personel]);
    }

    public function update(Personel $personel, Request $request){
        $data = $request->validate([
            'Rola' => 'required',
            'Imie' => 'required',
            'Nazwisko' => 'required',
            'Email'=> 'required',
            'NR_telefonu'=> 'required|numeric',
            'Miasto'=> 'required',
            'Ulica'=> 'required',
            'NR_domu'=> 'required|numeric',
            'Pesel'=> 'required|numeric',
        ]);

        $personel->update($data);

        return redirect(route('Personel.index'))->with('success', 'personel zedytowano pomyslnie');
    }

    public function destroy(Personel $personel){
        $personel->delete();
        return redirect(route('Personel.index'))->with('success', 'personel usunieto pomyslnie');
    }
}

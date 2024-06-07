<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Lokomotywa;

class LokomotywaController extends Controller
{
    public function index()
    {
        $lokomotywa = Lokomotywa::all();
        return view('lokomotywa.index', ['lokomotywa' => $lokomotywa]);
    }

    public function create()
    {
        return view('lokomotywa.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'Nazwa' => 'required',
            'Rok_produkcji' => 'required|numeric',
        ]);

        $newLokomotywa = Lokomotywa::create($data);

        return redirect()->route('lokomotywa.index')->with('success', 'Lokomotywę dodano pomyślnie');
    }

    public function edit(Lokomotywa $Lokomotywa){
        return view('lokomotywa.edit', ['lokomotywa' => $Lokomotywa]);
    }

    public function update(Lokomotywa $lokomotywa, Request $request)
    {
        $data = $request->validate([
            'Nazwa' => 'required',
            'Rok_produkcji' => 'required|numeric',
        ]);

        $lokomotywa->update($data);

        return redirect(route('lokomotywa.index'))->with('success', 'Lokomotywę zedytowano pomyślnie');
    }


    public function destroy(Lokomotywa $lokomotywa)
    {
        $lokomotywa->delete();
        return redirect()->route('lokomotywa.index')->with('success', 'Lokomotywę usunięto pomyślnie');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Bilet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BiletController extends Controller
{
    public function kupBilet(Request $request)
    {
        $request->validate([
            'Cena' => 'required|numeric',
            'Przejazd_idPrzejazd' => 'required|exists:przejazdy,id',
            'user_id' => 'required|exists:users,id',
        ]);

        DB::beginTransaction();

        try {
            $bilet = new Bilet();
            $bilet->Cena = $request->Cena;
            $bilet->Przejazd_idPrzejazd = $request->Przejazd_idPrzejazd;
            $bilet->user_id = $request->user_id;
            $bilet->save();

            DB::commit();

            return response()->json(['message' => 'Bilet zakupiony pomyślnie'], 200);
        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json(['error' => 'Błąd podczas zakupu biletu: ' . $e->getMessage()], 500);
        }
    }
}

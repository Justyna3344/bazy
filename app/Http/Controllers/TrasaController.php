<?php



namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Trasy;
use App\Models\Stacje;
use App\Models\CalaTrasa;

class TrasaController extends Controller
{
    public function index()
    {
        $trasy = Trasy::with('calaTrasa')->get();
        return view('trasy.index', ['trasy' => $trasy]);
    }
    

    public function create()
    {
        $stacje = Stacje::all();
        return view('trasy.create', compact('stacje'));
    }

    public function store(Request $request){
        $data = $request->validate([
            'Stacja_poczatkowa' => 'required',
            'Stacja_koncowa' => 'required',
            'Czas_podrozy' => 'required',
            'Opoznienie' => 'required',
            'Trasa_w_km' => 'required|numeric',
           // 'cala_trasa_id' => 'required',
            'Godzina_odjazdu' => 'required|date_format:H:i',
            'Godzina_przyjazdu' => 'required|date_format:H:i',
        ]);
       
        
        Trasy::create($data);

        return redirect(route('trasy.index'))->with('success', 'Trasa została dodana pomyślnie');
    }

    public function edit($id)
    {
        $trasa = Trasy::findOrFail($id);
        return view('trasy.edit', compact('trasa'));
    }

    public function update(Request $request, $id){
        $data = $request->validate([
            'Stacja_poczatkowa' => 'required',
            'Stacja_koncowa' => 'required',
            'Czas_podrozy' => 'required',
            'Opoznienie' => 'required',
            'Trasa_w_km' => 'required|numeric',
          //  'cala_trasa_id' => 'required',
          'Godzina_odjazdu' => 'required|date_format:H:i:s',
          'Godzina_przyjazdu' => 'required|date_format:H:i:s',
          
        ]);

        $trasa = Trasy::findOrFail($id);
        $trasa->update($data);

        return redirect(route('trasy.index'))->with('success', 'Trasa zaktualizowana pomyślnie');
    }

    public function destroy($id){
        $trasa = Trasy::findOrFail($id);
        $trasa->delete();
        return redirect(route('trasy.index'))->with('success', 'Trasa usunięta pomyślnie');
    }
   

}

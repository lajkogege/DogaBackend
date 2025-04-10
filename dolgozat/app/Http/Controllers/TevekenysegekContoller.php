<?php

namespace App\Http\Controllers;

use App\Models\Tevekenysegek;
use Illuminate\Http\Request;

use function App\Models\tevekenysegek;

class TevekenysegekContoller extends Controller
{
    public function tevekenysegKategoriaval(){
        $tevekenysegek=response()->json(Tevekenysegek::with('katnev')->get());
        return $tevekenysegek;
    }

    public function index(){
        return Tevekenysegek::all();
    }
    public function store(Request $request){
        $tevekenysegek= new Tevekenysegek();
        $tevekenysegek->kat_id=$request->input('kat_id');
        $tevekenysegek->tev_nev=$request->input('tev_nev');
        $tevekenysegek->allapot=$request->input('allapot');
    }

public function destroy($id){
    Tevekenysegek::find($id)->delete();
}

}

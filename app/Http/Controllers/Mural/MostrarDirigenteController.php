<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use App\Models\Dirigente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarDirigenteController extends Controller
{
    
   public function index(Request $request, $filial)
    {
        // Busca a filial pelo nome_filial
        $filialModel = Filial::where('nome_filial', $filial)->first();

        if (!$filialModel) {
            // Opção A: 404
            abort(404, 'Filial não encontrada.');

            // Opção B: Redirecionar com flash message
            // return redirect()->route('mural.index')
            //     ->with('error', 'Filial não encontrada.');
        }


        $dirigentes = Dirigente::where('filial_id', $filialModel->id)
            ->orderBy('id')
            ->get();
    
        return view('pages.mural.dirigentes', [
            'dirigentes' => $dirigentes,
            'filial'     => $filialModel,
        ]);
    }

}

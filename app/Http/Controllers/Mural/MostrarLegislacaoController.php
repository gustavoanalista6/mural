<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use App\Models\Legislacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarLegislacaoController extends Controller
{
    public function index(Request $request,$filial){
    
        $filial = Filial::where('nome_filial', $filial)->first() ?? null;
        $documentos = Legislacao::where('filial_id', $filial->id)->get() ?? null;

        return view('pages.mural.legislacoes', compact('documentos', 'filial'));
    }
}

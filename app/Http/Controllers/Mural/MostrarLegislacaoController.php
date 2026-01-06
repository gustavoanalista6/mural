<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use App\Models\Legislacao;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarLegislacaoController extends Controller
{
     public function index(Request $request,$filial){
        $filialId = Filial::where('nome_filial', $request->slug)->get() ?? null;
        $data = Legislacao::where('filial_id', $filialId)->get() ?? null;
        //TODO RETORNAR O PDF QUE ESTÁ DENTRO DA TABELA
    }
}

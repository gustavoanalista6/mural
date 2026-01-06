<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use App\Models\Servico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarServicoController extends Controller
{
    public function index(Request $request,$filial){
        $filialId = Filial::where('nome_filial', $request->slug)->get() ?? null;
        $data = Servico::where('filial_id', $filialId)->get() ?? null;
        //TODO RETORNAR O PDF QUE ESTÁ DENTRO DA TABELA
    }
    
}

<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use App\Models\Servico;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarServicoController extends Controller
{
   
    public function index(Request $request,$filial){
    
        $filial = Filial::where('nome_filial', $filial)->first() ?? null;
        $servicos = Servico::where('filial_id', $filial->id)->get() ?? null;
        return view('pages.mural.servicos',  compact('servicos', 'filial'));
    }
}

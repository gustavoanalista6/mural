<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use Illuminate\Http\Request;
use App\Models\Credenciamento;
use App\Http\Controllers\Controller;

class MostrarCredenciamentoController extends Controller
{
    public function index(Request $request,$filial){
        $filialId = Filial::where('nome_filial', $request->slug)->get() ?? null;
        $credenciamento = Credenciamento::where('filial_id', $filialId)->get() ?? null;
        return view('pages.mural.credenciamento-institucional', compact('credenciamento'));
    }
}

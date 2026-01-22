<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use Illuminate\Http\Request;
use App\Models\Credenciamento;
use App\Http\Controllers\Controller;

class MostrarCredenciamentoController extends Controller
{
    public function index(Request $request,$filial){
    
        $filial = Filial::where('nome_filial', $filial)->first() ?? null;
        $data = Credenciamento::where('filial_id', $filial->id)->first() ?? null;
        $data['title'] = '';
        return view('pages.mural.render-pdf', compact('data', 'filial'));
    }
}

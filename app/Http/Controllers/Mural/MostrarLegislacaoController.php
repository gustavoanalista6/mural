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
    
        // Página dinâmica (?url=)
        if ($request->filled('url')) {
            return $this->renderDynamicPage($request->query('url'), $filial);
        }

        return view('pages.mural.legislacoes', compact('documentos', 'filial'));
    }

    private function renderDynamicPage(string $url, $filial)
    {
        return view('pages.mural.render-pdf',[
            'data' => ['title' => '', 'url' => $url], 
            'filial' => $filial
        ]);
    }
}

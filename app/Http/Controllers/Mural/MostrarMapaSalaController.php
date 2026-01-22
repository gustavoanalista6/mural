<?php

namespace App\Http\Controllers\Mural;

use App\Http\Controllers\Controller;
use App\Models\Filial;
use Illuminate\Http\Request;

class MostrarMapaSalaController extends Controller
{
    public function index(Request $request, string $filial)
    {
    
        $filial = Filial::where('nome_filial', $filial)->firstOrFail();

        // Se existir query string ?page=
        if ($request->filled('url')) {
            return $this->renderDynamicPage($request->query('url'), $filial);
        }

       return view('pages.mural.mapa_sala', compact('mapa_sala'));
    }

    private function renderDynamicPage(string $url, $filial)
    {
        return view('pages.mural.render-pdf',[
            'data' => ['title' => '', 'url' => $url],
            'filial' => $filial
        ]);
    }
}

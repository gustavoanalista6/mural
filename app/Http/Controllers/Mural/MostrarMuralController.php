<?php

namespace App\Http\Controllers\Mural;

use App\Models\Curso;
use App\Models\Filial;
use App\Models\Pagina;
use Illuminate\Http\Request;
use App\Models\InformacaoGeral;
use App\Http\Controllers\Controller;

class MostrarMuralController extends Controller
{
 public function index(Request $request, string $filial)
    {
        $filial = Filial::where('nome_filial', $filial)->firstOrFail();

        // Se existir query string ?page=
        if ($request->filled('page')) {
            return $this->renderDynamicPage($request->query('page'), $filial);
        }

        // Mural padrão
        return $this->renderMural($filial);
    }

    private function renderMural(Filial $filial)
    {
        return view('pages.mural.index', [
            'filial'        => $filial,
            'courses'       => Curso::where('filial_id', $filial->id)->get(),
            'generalLinks'  => InformacaoGeral::where('filial_id', $filial->id)->get(),
        ]);
    }

    private function renderDynamicPage(string $page, Filial $filial)
    {
        $pageContent = Pagina::where('filial_id', $filial->id)
            ->where('page', $page)
            ->firstOrFail();

        // Página em PDF
        if (!empty($pageContent->url_pdf)) {
            return redirect()->to($pageContent->url_pdf);
        }

        // Página HTML
        return view('pages.mural.page', [
            'filial' => $filial,
            'page'   => $pageContent
        ]);
    }
}

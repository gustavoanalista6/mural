<?php

namespace App\Http\Controllers\Mural;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\DetalheCurso;
use App\Models\Filial;
use App\Models\Pagina;
use App\Models\InformacaoGeral;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MostrarDetalheCursoController extends Controller
{
    public function index(Request $request, $filialSlug, $cursoSlug)
    {

       
        $filial = Filial::where('nome_filial', $filialSlug)->firstOrFail();
        

        $curso = Curso::where('route', $cursoSlug)
            ->where('filial_id', $filial->id)
            ->firstOrFail();

        // Página dinâmica (?url=)
        if ($request->filled('url')) {
            return $this->renderDynamicPage($request->query('url'));
        }

        return $this->renderDetail($filial, $curso);
    }

    private function renderDetail(Filial $filial, Curso $curso)
    {
       // dd($filial->id,$curso->id);
        $detalhesCurso = DB::table('detalhe_curso')
            ->where('filial_id', $filial->id)
            ->where('curso_id', $curso->id)
            ->get();

     
        return view('pages.mural.detail-curso', [
            'filial' => $filial,
            'detalhesCurso'       => $detalhesCurso,
            
        ]);
    }

    private function renderDynamicPage(string $url)
    {

       return view('pages.mural.render-pdf',[
            'data' => ['title' => '', 'url' => $url]
        ]);
    }
}

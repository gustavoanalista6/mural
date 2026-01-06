<?php

namespace App\Http\Controllers\Mural;

use App\Models\Curso;
use App\Models\Filial;
use App\Models\Pagina;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarDetalheCursoController extends Controller
{
    public function index(Request $request, $filial, $curso){
        $filial = Filial::where('nome_filial', $filial)->first();
        $curso = Curso::where('nome_curso', $curso)->first();
        $page = $request->query('page');
        $pagina = Pagina::where('filial_id', $filial->id)->where('curso_id', $curso->id)->where('page', $page);

        //TODO - RENDERIZAR O CONTEUDO

        dd($page);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\Curso;
use App\Models\Filial;
use App\Models\InformacaoGeral;
use App\Models\Legislacao;
use App\Models\MapaSala;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class MuralDigitalController extends Controller
{
   public function show(Request $request, $slug)
    {
        $filial = DB::table('filiais')->where('nome_filial',$slug)->exists();
        if (! $filial) {
            return response()->json([
                'status' => 'false',
                'message' => 'Filial não encontrada.',
            ], 404);
        }
        $filial = DB::select("SELECT id FROM filiais WHERE nome_filial = ?",[$slug])[0]->id;
 


        $informacoes = DB::select("SELECT titulo, icone_informacao, habilitado FROM informacao WHERE filial_id =? ",[$filial]);
        $cursos = DB::select("SELECT * FROM cursos WHERE filial_id =? ",[$filial]);
        $legislacao = DB::select("SELECT * FROM legislacao WHERE filial_id =? ",[$filial]);
        $mapaSala = DB::select("SELECT * FROM mapa_salas WHERE filial_id =? ",[$filial]);
        $servicos = DB::select("SELECT * FROM servicos WHERE filial_id =? ",[$filial]);

        return view('mural.index')
            ->with('filial', $filial)
            ->with('informacoes', $informacoes)
            ->with('cursos', $cursos)
            ->with('legislacao', $legislacao)
            ->with('mapaSala', $mapaSala)
            ->with('servicos', $servicos);
    }
}

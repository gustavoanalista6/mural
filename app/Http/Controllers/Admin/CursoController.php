<?php

namespace App\Http\Controllers\Admin;

use App\Models\Curso;
use App\Models\Filial;
use App\Models\Pagina;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CursoController extends Controller
{

    public function index(){
        $cursos = Curso::all();
        return view('pages.adm.curso',  compact('cursos'));
    }

   /**
     * Mostrar curso
     */
    public function show(Request $request, $id){
        if(!Curso::where('id','=',$id)->exists()){
            return response()->json([
                'status' => 'false',
                'message' => 'Curso não encontrado'
            ], 404);
        }
        $data = Curso::find($id);

        return response()->json([
            'status' => 'success',
            'message' => 'Mostrado com sucesso.',
            'data' => $data
        ], 200);
    }
    
    /**
     * Atualizar curso
    */
    public function update(Request $request, $id){
       if(Curso::where('id', '=',$id)->exists()){
            $data = DB::table('cursos')->where('id', $id)->update([
                'nome_curso' => $request->nome_curso
            ]);

            return response()->json([
            'status' => 'success',
            'message' => 'Atualizado com sucesso.',
            ], 200);
        }

        return response()->json([
            'status' => 'false',
            'message' => 'Não encontrado.',
        ], 404);
    }

    /**
     * Salvar curso
    */
    public function store(Request $request){
        $data = Curso::create([
            'nome_curso' => $request->nome_curso,
            'url_logo' => $request->url_logo, 
            'filial_id' =>$request->filial_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Criado com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Excluir curso
    */
    public function destroy(Request $request){
       $data = DB::table('cursos')->where('nome_curso', $request->nome_curso)->delete();
       if($data){
        return response()->json([
            'status' => 'success',
            'message' => 'Excluído com sucesso.',
        ], 200);
       }
        return response()->json([
            'status' => 'false',
            'message' => 'Não econtrado.',
        ], 404);
    }
}

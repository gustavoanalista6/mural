<?php

namespace App\Http\Controllers\Admin;

use App\Models\Filial;
use App\Models\Legislacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class LegislacaoController extends Controller
{




    /**
     * Mostrar legislação
     */
    public function show(Request $request, $id){
        if(!Legislacao::where('id','=',$id)->exists()){
            return response()->json([
                'status' => 'false',
                'message' => 'Nenhuma legislação enontrada'
            ], 404);
        }

        $data = Legislacao::find($id);

        return response()->json([
            'status' => 'success',
            'message' => 'Mostrado legislação com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Atualizar legislação
     */
    public function update(Request $request, $id){
       $data =  DB::table('legislacao')->where('id', $id)->update([
            'titulo' => $request->titulo,
            'url_pdf' => $request->url_pdf,
            'filial_id' =>$request->filial_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Atualizado legislação com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Salvar legislação
     */
    //TODO - Criar camada request para validar dados obrigatórios

    public function store(Request $request){
        $data = Legislacao::create([
            'titulo' => $request['titulo'], 
            'url_pdf'=> $request['url_pdf'], 
            'filial_id' =>$request->filial_id
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Criado legislação com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Excluir legislação
     */
    public function destroy(Request $request){
        $data = DB::table('legislacao')->where('id', $request->id)->delete();
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

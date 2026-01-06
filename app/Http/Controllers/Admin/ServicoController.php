<?php

namespace App\Http\Controllers\Admin;

use App\Models\Filial;
use App\Models\Servico;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Symfony\Component\HttpKernel\Event\RequestEvent;

class ServicoController extends Controller
{

    /**
     * Mostrar serviço
     */
    public function show(Request $request, $id){
        if(!Servico::where('id','=',$id)->exists()){
            return response()->json([
                'status' => 'false',
                'message' => 'Serviço não enontrado.'
            ], 404);
        }

        $data = Servico::find($id);
        
        return response()->json([
            'status' => 'success',
            'message' => 'Mostrado com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Atualizar serviço
     */
    public function update(Request $request, $id){
       $data =  DB::table('servicos')->where('id', $id)->update([
            'descriminacao' => $request->descriminacao,
            'valor' => $request->valor,
            'mensalidades_url_pdf' => $request->mensalidades_url_pdf
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Atualizado com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Salvar serviço
     */
    //TODO - Criar camada request para validar dados obrigatórios

    public function store(Request $request){
        $data = Servico::create([
            'filial_id' => $request['filial_id'], 
            'descriminacao' => $request['descriminacao'], 
            'valor'=> $request['valor'], 
            'mensalidades_url_pdf' => $request['mensalidades_url_pdf']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Criado com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Excluir serviço
     */
    public function destroy(Request $request){
        $data = DB::table('servicos')->where('id', $request->id)->delete();
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

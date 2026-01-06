<?php

namespace App\Http\Controllers\Admin;

use App\Models\Filial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class FilialController extends Controller
{
    public function index(){
        $filiais = Filial::all();
        dd($filiais);
    }

   /**
     * Mostrar filial
     */
    public function show(Request $request, $id){
        if(!Filial::where('id','=',$id)->exists()){
            return response()->json([
                'status' => 'false',
                'message' => 'Nenhuma filial encontrada'
            ], 404);
        }

        $data = Filial::find($id);

        return response()->json([
            'status' => 'success',
            'message' => 'Mostrado filial com sucesso.',
            'data' => $data
        ], 200);
    }
    
    /**
     * Atualizar filial
    */
    public function update(Request $request, $id){
       $data = DB::table('filiais')->where('id', $id)->update([
            'nome_filial' => $request->nome_filial,
            'foto_url_filial' => $request->foto_url_filial,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Atualizado filial com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Salvar filial
     */
    //TODO - Criar camada request para validar dados obrigatórios
    public function store(Request $request){

        $data = Filial::create([
            'nome_filial' => $request['nome_filial']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Criado filial com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Excluir filial
     */
    public function destroy(Request $request){
       $data = DB::table('filiais')->where('nome_filial', $request->nome_filial)->delete();
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

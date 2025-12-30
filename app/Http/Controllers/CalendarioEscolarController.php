<?php

namespace App\Http\Controllers;

use App\Models\CalendarioEscolar;
use App\Models\Filial;
use Illuminate\Http\Request;

class CalendarioEscolarController extends Controller
{
   /**
     * Mostrar CalendarioEscolar
     */
    public function show(Request $request, $id){
        $data = CalendarioEscolar::find($id);
        $filial = Filial::find()->get();
        //retornar as filiais e calendario
        return response()->json([
            'status' => 'success',
            'message' => 'Mostrado calendario escolar com sucesso.',
            'data' => $data
        ], 200);
    }
    
    /**
     * Atualizar CalendarioEscolar
     */
    public function update(Request $request, $id){
       $data = CalendarioEscolar::where('id', $id)->update([
            'url_pdf' => $request->url_pdf,
            'filial_id' => $request['filial_id']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Atualizado calendario escolar com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Salvar CalendarioEscolar
     */
    public function store(Request $request){
        $data = CalendarioEscolar::create([
            'url_pdf'=> $request['url_pdf'], 
            'filial_id' => $request['filial_id']
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Criado calendario escolar com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Excluir CalendarioEscolar
     */
    public function destroy(Request $request, $id){
        $data = CalendarioEscolar::find($id);
        $data->delete();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Excluído calendario escolar com sucesso.',
            'data' => $data
        ], 200);
    }
}

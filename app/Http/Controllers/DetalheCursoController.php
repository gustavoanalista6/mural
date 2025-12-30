<?php

namespace App\Http\Controllers;

use App\Models\DetalheCurso;
use Illuminate\Http\Request;

class DetalheCursoController extends Controller
{
   /**
     * Mostrar DetalheCurso
     */
    public function show(Request $request, $id){
        $data = DetalheCurso::find($id);

        return response()->json([
            'status' => 'success',
            'message' => 'Mostrado detalhe curso com sucesso.',
            'data' => $data
        ], 200);
    }
    
    /**
     * Atualizar DetalheCurso
     */
    public function update(Request $request, $id){
       $data = DetalheCurso::where('id', $id)->update([
            'titulo' => $request->titulo,
            'url_pdf' => $request->url_pdf,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Atualizado detalhe curso com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Salvar DetalheCurso
     */
    public function store(Request $request){
        $data = DetalheCurso::create([
            'titulo' => $request['titulo'], 
            'url_pdf'=> $request['url_pdf'], 
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Criado detalhe curso com sucesso.',
            'data' => $data
        ], 200);
    }

    /**
     * Excluir DetalheCurso
     */
    public function destroy(Request $request, $id){
        $data = DetalheCurso::find($id);
        $data->delete();
        
        return response()->json([
            'status' => 'success',
            'message' => 'Excluído detalhe curso com sucesso.',
            'data' => $data
        ], 200);
    }
}

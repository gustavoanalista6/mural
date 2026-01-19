<?php

namespace App\Http\Controllers\Mural;

use App\Http\Controllers\Controller;
use App\Models\Curso;
use App\Models\Filial;
use App\Models\InformacaoGeral;
use Illuminate\Http\Request;

class MostrarEadController extends Controller
{
    public function index(Request $request, string $filial){

        //TODO PEGAR ID DA FILIAL PELA URL DA FILIAL
        $filial = Filial::where('nome_filial', $filial)->firstOrFail();

        return view('pages.mural.ead', [
            'filial' => $filial,
            'courses'       => Curso::where('filial_id', $filial->id)->where('category', '=', 'ead')->get(),
            'generalLinks'  => InformacaoGeral::where('filial_id', $filial->id)->get(),
        ]);
    }
}

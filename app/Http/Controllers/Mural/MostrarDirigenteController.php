<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use App\Models\Dirigente;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MostrarDirigenteController extends Controller
{
     public function index(Request $request,$filial){
        $filialId = Filial::where('nome_filial', $request->slug)->get() ?? null;
        $dirigentes = Dirigente::where('filial_id', $filialId)->get() ?? null;

        return view('pages.mural.dirigentes', compact('dirigentes'));
    }
}

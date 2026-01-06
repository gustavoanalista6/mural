<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use Illuminate\Http\Request;
use App\Models\CalendarioEscolar;
use App\Http\Controllers\Controller;

class MostrarCalendarioController extends Controller
{
    public function index(Request $request,$filial){
        $filialId = Filial::where('nome_filial', $request->slug)->get() ?? null;
        $calendario = CalendarioEscolar::where('filial_id', $filialId)->get() ?? null;
        return view('pages.mural.calendario-escolar', compact('calendario'));
    }
}

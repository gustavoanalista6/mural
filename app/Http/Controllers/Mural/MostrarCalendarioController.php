<?php

namespace App\Http\Controllers\Mural;

use App\Models\Filial;
use Illuminate\Http\Request;
use App\Models\CalendarioEscolar;
use App\Http\Controllers\Controller;

class MostrarCalendarioController extends Controller
{
    public function index(Request $request,$filial){
    
        $filial = Filial::where('nome_filial', $filial)->first() ?? null;
        $data = CalendarioEscolar::where('filial_id', $filial->id)->first() ?? null;
        $data['title'] = 'calendário escolar';
        return view('pages.mural.render-pdf', compact('data'));
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MuralController extends Controller
{
    public function index()
    {
        // Cursos
        $courses = [
            [
                'title' => 'Medicina',
                'subtitle' => 'Curso de Graduação',
                //'url' => route('mural.curso.medicina'),
                'icon' => asset('img/icons/medicina.png'),
            ],
            [
                'title' => 'Odontologia',
                'subtitle' => 'Curso de Graduação',
               // //'url' => route('mural.curso.odontologia'),
                'icon' => asset('img/icons/odontologia.png'),
            ],
        ];

        // Informações gerais
        $generalLinks = [
            [
                'title' => 'Ato Autorizativo',
                'subtitle' => 'Documentos oficiais',
                //'url' => route('mural.ato-autorizativo'),
                'icon' => asset('img/icons/ato.png'),
            ],
            [
                'title' => 'Dirigentes',
                'subtitle' => 'Equipe administrativa',
                //'url' => route('mural.dirigentes'),
                'icon' => asset('img/icons/dirigentes.png'),
            ],
            [
                'title' => 'Avaliações MEC',
                'subtitle' => 'Últimos resultados',
                //'url' => route('mural.mec'),
                'icon' => asset('img/icons/mec.png'),
            ],
            [
                'title' => 'Taxas e Serviços',
                'subtitle' => 'Valores e procedimentos',
                //'url' => route('mural.taxas'),
                'icon' => asset('img/icons/taxas.png'),
            ],
            [
                'title' => 'Legislações',
                'subtitle' => 'Normas institucionais',
                //'url' => route('mural.legislacoes'),
                'icon' => asset('img/icons/legislacoes.png'),
            ],
            [
                'title' => 'Calendário Escolar',
                'subtitle' => 'Datas acadêmicas',
                //'url' => route('mural.calendario'),
                'icon' => asset('img/icons/calendario.png'),
            ],
        ];

        return view('pages.mural', [
            'courses' => $courses,
            'generalLinks' => $generalLinks,
        ]);
    }

    /* ===== Rotas de exemplo ===== */
    public function placeholder($title)
    {
        return view('pages.mural-placeholder', [
            'title' => $title
        ]);
    }
}

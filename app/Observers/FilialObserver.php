<?php

namespace App\Observers;

use App\Models\Filial;
use App\Models\InformacaoGeral;

class FilialObserver
{
    /**
     * Handle the Filial "created" event.
     *
     * @param  \App\Models\Filial  $filial
     * @return void
     */
    public function created(Filial $filial)
    {

        $informacoes = [
            ['title' => 'CALENDARIO ESCOLAR', 'icon' => 'teste', 'filial_id' => $filial['id'], 'route' => '/calendario-escolar'],
            ['title' => 'CREDENCIAMENTO INSTITUCIONAL', 'icon' => 'teste', 'filial_id' => $filial['id'], 'route' => '/credenciamento-institucional'],
            ['title' => 'DIRIGENTE', 'icon' => 'teste', 'filial_id' => $filial['id'], 'route' => '/dirigentes'],
            ['title' => 'LEGISLACAO', 'icon' => 'teste', 'filial_id' => $filial['id'], 'route' => '/legislacoes'],
            ['title' => 'SERVICO', 'icon' => 'teste', 'filial_id' => $filial['id'], 'route' => '/taxas-servicos'],
        ];

        //dd($informacoes);

        InformacaoGeral::insert($informacoes);
    }

    /**
     * Handle the Filial "updated" event.
     *
     * @param  \App\Models\Filial  $filial
     * @return void
     */
    public function updated(Filial $filial)
    {
        //
    }

    /**
     * Handle the Filial "deleted" event.
     *
     * @param  \App\Models\Filial  $filial
     * @return void
     */
    public function deleted(Filial $filial)
    {
        //
    }

    /**
     * Handle the Filial "restored" event.
     *
     * @param  \App\Models\Filial  $filial
     * @return void
     */
    public function restored(Filial $filial)
    {
        //
    }

    /**
     * Handle the Filial "force deleted" event.
     *
     * @param  \App\Models\Filial  $filial
     * @return void
     */
    public function forceDeleted(Filial $filial)
    {
        //
    }
}

<?php

use App\Http\Controllers\Admin\CursoController as AdminCursoController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\FilialController as AdminFilialController;
use App\Http\Controllers\Admin\LegislacaoController as AdminLegislacaoController;
use App\Http\Controllers\Admin\ServicoController as AdminServicoController;
use App\Http\Controllers\Admin\UsuarioController as AdminUsuarioController;

use App\Http\Controllers\Mural\MostrarCalendarioController;
use App\Http\Controllers\Mural\MostrarCredenciamentoController;
use App\Http\Controllers\Mural\MostrarDetalheCursoController;
use App\Http\Controllers\Mural\MostrarDirigenteController;
use App\Http\Controllers\Mural\MostrarLegislacaoController;
use App\Http\Controllers\Mural\MostrarMuralController;
use App\Http\Controllers\Mural\MostrarServicoController;

use App\Http\Controllers\ConfigController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

//INFO -ROTAS DA PARTE ADMINISTRATIVA
Route::prefix('/adm')->group(function () {
    Route::middleware(['auth'])->group(function () {
    Route::get('/usuarios', [AdminUsuarioController::class, 'index'])->name('usuarios');
      Route::post('/usuario', [AdminUsuarioController::class, 'update'])->name('usuario');

        Route::get('/legislacao/{id}',[AdminLegislacaoController::class, 'show']);
        Route::post('/legislacao/{id}',[AdminLegislacaoController::class, 'update']);
        Route::post('/legislacao',[AdminLegislacaoController::class, 'store']);
        Route::delete('/legislacao',[AdminLegislacaoController::class, 'destroy']);

        Route::get('/servicos',[AdminServicoController::class, 'index'])->name('servicos');
        Route::get('/servico/{id}',[AdminServicoController::class, 'show']);
        Route::post('/servico/{id}',[AdminServicoController::class, 'update']);
        Route::post('/servico',[AdminServicoController::class, 'store']);
        Route::delete('/servico',[AdminServicoController::class, 'destroy']);

        Route::get('/filiais',[AdminFilialController::class, 'index'])->name('filiais');
        Route::get('/filial/{id}',[AdminFilialController::class, 'show']);
        Route::post('/filial/{id}',[AdminFilialController::class, 'update']);
        Route::post('/filial',[AdminFilialController::class, 'store']);
        Route::delete('/filial',[AdminFilialController::class, 'destroy']);

        Route::get('/cursos',[AdminCursoController::class, 'index'])->name('cursos');
        Route::get('/curso/{id}',[AdminCursoController::class, 'show']);
        Route::post('/curso/{id}',[AdminCursoController::class, 'update']);
        Route::post('/curso',[AdminCursoController::class, 'store']);
        Route::delete('/curso',[AdminCursoController::class, 'destroy']);

        Route::get('/', [DashboardController::class ,'index']);
        Route::get('/dashboard', [DashboardController::class ,'index'])->name('dashboard');
    });
});


//INFO - ROTAS DO MURAL DIGITAL
Route::prefix('/mural/{filial}')->group(function () {
    Route::get('/{curso}',[MostrarDetalheCursoController::class, 'index']);

    Route::get('/',[MostrarMuralController::class, 'index'])->name('mural');
    Route::get('/credenciamento-institucional', [MostrarCredenciamentoController::class, 'index']);
    Route::get('/dirigentes', [MostrarDirigenteController::class, 'index']);
    Route::get('/legislacoes', [MostrarLegislacaoController::class, 'index']);
    Route::get('/taxas-servicos', [MostrarServicoController::class, 'index']);
    Route::get('/calendario-escolar', [MostrarCalendarioController::class, 'index']);
});


//INFO - ROTA DE CONFIGURAÇÃO DO SISTEMA
Route::get('/config', [ConfigController::class, 'deploy']);

require __DIR__.'/auth.php';

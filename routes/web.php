<?php


use App\Http\Controllers\ConfigController;
use App\Http\Controllers\LegislacaoController;
use App\Http\Controllers\ServicoController;
use App\Http\Controllers\FilialController;
use App\Http\Controllers\CursoController;
use App\Http\Controllers\MuralDigitalController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;




Route::middleware(['auth'])->group(function () {
    Route::get('/legislacao/{id}',[LegislacaoController::class, 'show']);
    Route::post('/legislacao/{id}',[LegislacaoController::class, 'update']);
    Route::post('/legislacao',[LegislacaoController::class, 'store']);
    Route::delete('/legislacao',[LegislacaoController::class, 'destroy']);

    Route::get('/servico/{id}',[ServicoController::class, 'show']);
    Route::post('/servico/{id}',[ServicoController::class, 'update']);
    Route::post('/servico',[ServicoController::class, 'store']);
    Route::delete('/servico',[ServicoController::class, 'destroy']);

    Route::get('/filial/{id}',[FilialController::class, 'show']);
    Route::post('/filial/{id}',[FilialController::class, 'update']);
    Route::post('/filial',[FilialController::class, 'store']);
    Route::delete('/filial',[FilialController::class, 'destroy']);

    Route::get('/curso/{id}',[CursoController::class, 'show']);
    Route::post('/curso/{id}',[CursoController::class, 'update']);
    Route::post('/curso',[CursoController::class, 'store']);
    Route::delete('/curso',[CursoController::class, 'destroy']);

    Route::get('/mural-digital/{slug}',[MuralDigitalController::class, 'show']);

    //Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/config', [ConfigController::class, 'deploy']);
});



/*
//OBS: SERA UM SISTEMA QUE ACESSA PÁGINAS POR ROTA, SEM PAGINAÇÃO (nav)*/
//Route::get('/',[App\Http\Controllers\HomeController::class, 'index']);



//Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/mural', [App\Http\Controllers\MuralController::class, 'index'])->name('mural');//rota do iago


require __DIR__.'/auth.php';

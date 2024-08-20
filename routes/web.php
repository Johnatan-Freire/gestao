<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\MainController::class, 'index'])->name('site.index');
Route::get('/contato', [\App\Http\Controllers\ContactController::class, 'index'])->name('site.contact');
Route::post('/contato', [\App\Http\Controllers\ContactController::class, 'store']);
Route::get('/sobre', [\App\Http\Controllers\AboutController::class, 'index'])->name('site.about');
Route::get('/login', function(){return 'login';})->name('site.login');

Route::prefix('/app')->group(function(){
    Route::get('/clientes', function(){return 'clientes';})->name('app.client');
    Route::get('/fornecedores', function(){return 'fornecedor';})->name('app.provider');
    Route::get('/produtos', function(){return 'produto';})->name('app.product');
});

Route::fallback(function(){echo 'Esta página não existe, <a href="'.route('site.index').'"> Clique aqui</a> para voltar para a página inicial';});
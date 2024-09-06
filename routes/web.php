<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\ProviderController;
use App\Http\Controllers\ProductController;

Route::get('/', [MainController::class, 'index'])->name('site.index');
Route::get('sobre', [AboutController::class, 'index'])->name('site.about');
Route::get('contato', [ContactController::class, 'index'])->name('site.contact');
Route::post('contato', [ContactController::class, 'store'])->name('site.contact');

Route::get('login', [AuthenticatedSessionController::class, 'create'])->name('login');
Route::get('nova-conta', [RegisteredUserController::class, 'create'])->name('create.acount');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->prefix('/app')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/cliente', [ClientController::class, 'index'])->name('app.client');

    Route::get('/fornecedor', [ProviderController::class, 'index'])->name('app.provider.index');
    Route::get('/fornecedor/cadastrar', [ProviderController::class, 'create'])->name('app.provider.create');
    Route::post('/fornecedor', [ProviderController::class, 'store'])->name('app.provider.store');
    Route::get('/fornecedor/editar/{id}', [ProviderController::class, 'edit'])->name('app.provider.edit');
    Route::put('/fornecedor/{id}', [ProviderController::class, 'update'])->name('app.provider.update');
    Route::delete('/fornecedor/{id}', [ProviderController::class, 'destroy'])->name('app.provider.destroy');

   Route::resource('produto', ProductController::class)->names([
    'index' => 'app.product.index',
    'create' => 'app.product.create',
    'store' => 'app.product.store',
    'show' => 'app.product.show',
    'edit' => 'app.product.edit',
    'update' => 'app.product.update',
    'destroy' => 'app.product.destroy',
   ]);
});

require __DIR__ . '/auth.php';

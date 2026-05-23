<?php

declare(strict_types=1);

use App\Http\Controllers\ContatoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\HospedagemController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServicosController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Rotas públicas — site institucional Portal Web PE
|--------------------------------------------------------------------------
*/

Route::get('/', HomeController::class)->name('home');

Route::get('/hospedagem-de-sites', HospedagemController::class)->name('hospedagem');

Route::prefix('servicos')->name('servicos.')->group(function () {
    Route::get('criacao-de-sites', [ServicosController::class, 'criacao'])->name('criacao');
    Route::get('manutencao-de-sites', [ServicosController::class, 'manutencao'])->name('manutencao');
    Route::get('design-redes-sociais', [ServicosController::class, 'design'])->name('design');
});

// Aliases retro-compatíveis (URLs antigas que já podem estar indexadas)
Route::redirect('/criacao-de-sites', '/servicos/criacao-de-sites', 301);

Route::get('/sobre', [PageController::class, 'sobre'])->name('sobre');
Route::get('/faq', [PageController::class, 'faq'])->name('faq');
Route::get('/politica-de-privacidade', [PageController::class, 'politicaPrivacidade'])->name('politica-privacidade');

Route::get('/contato', [ContatoController::class, 'show'])->name('contato');
Route::post('/contato', [ContatoController::class, 'send'])->name('contato.send');

/*
|--------------------------------------------------------------------------
| Rotas autenticadas (dashboard / perfil)
|--------------------------------------------------------------------------
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'pages.home')->name('home');
Route::view('/hospedagem', 'pages.hospedagem')->name('hospedagem');
Route::view('/criacao-de-sites', 'pages.criacao-sites')->name('criacao-sites');
Route::view('/sobre', 'pages.sobre')->name('sobre');
Route::view('/contato', 'pages.contato')->name('contato');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/politica-de-privacidade', 'pages.politica-privacidade')->name('politica-privacidade');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

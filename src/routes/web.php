<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::view('/', 'pages.home')->name('home');
Route::view('/hospedagem', 'pages.hospedagem')->name('hospedagem');
Route::view('/criacao-de-sites', 'pages.criacao-sites')->name('criacao-sites');
Route::view('/sobre', 'pages.sobre')->name('sobre');
Route::view('/contato', 'pages.contato')->name('contato');
Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/politica-de-privacidade', 'pages.politica-privacidade')->name('politica-privacidade');

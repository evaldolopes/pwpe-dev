<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class ServicosController extends Controller
{
    /**
     * Página "Criação de sites e Sistemas Web".
     */
    public function criacao(): View
    {
        return view('pages.criacao-sites');
    }

    /**
     * Página de "Manutenção de sites".
     */
    public function manutencao(): View
    {
        return view('pages.manutencao-sites');
    }

    /**
     * Página "Design para Redes Sociais (Link da Bio / Cards)".
     */
    public function design(): View
    {
        return view('pages.design-redes-sociais');
    }
}

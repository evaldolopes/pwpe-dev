<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

/**
 * Controla páginas institucionais simples que não exigem dados dinâmicos
 * (sobre, FAQ, política de privacidade etc.). Mantém uma única classe
 * para evitar uma proliferação desnecessária de controllers vazios.
 */
class PageController extends Controller
{
    public function sobre(): View
    {
        return view('pages.sobre');
    }

    public function faq(): View
    {
        return view('pages.faq');
    }

    public function politicaPrivacidade(): View
    {
        return view('pages.politica-privacidade');
    }
}

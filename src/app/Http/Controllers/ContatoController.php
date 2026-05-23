<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Http\Requests\ContatoRequest;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Log;

class ContatoController extends Controller
{
    public function show(): View
    {
        return view('pages.contato');
    }

    public function send(ContatoRequest $request): RedirectResponse
    {
        $data = $request->validated();

        // TODO: enviar para fila/e-mail real (Mailable + Notification),
        // gravar lead, integrar com WhatsApp/CRM. Por enquanto deixamos
        // registrado em log para validar o fluxo.
        Log::channel('stack')->info('Novo contato site PWPE', $data);

        return redirect()
            ->route('contato.show')
            ->with('success', 'Mensagem enviada! Entraremos em contato em breve.');
    }
}

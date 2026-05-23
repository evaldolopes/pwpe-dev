<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Services\WhmcsService;
use Illuminate\Contracts\View\View;

class HospedagemController extends Controller
{
    public function __construct(private readonly WhmcsService $whmcs) {}

    public function __invoke(): View
    {
        // Planos estáticos exibidos no site. Mantemos no Blade como fallback
        // garantido. Quando o WHMCS estiver disponível, os preços podem ser
        // sincronizados em tarefas agendadas ou exibidos diretamente daqui.
        $plans = [
            [
                'slug'         => 'start-pe',
                'name'         => 'Start PE',
                'description'  => 'Para sites pessoais, blogs e empresas iniciando online.',
                'monthly'      => '29,90',
                'annual'       => '24,90',
                'highlight'    => false,
                'tag'          => null,
                'button_text'  => 'Contratar Start PE',
                'features'     => [
                    '5 GB de armazenamento SSD',
                    '1 domínio principal',
                    '5 contas de e-mail',
                    'Certificado SSL grátis',
                    'Backup periódico',
                    'WordPress com instalação rápida',
                ],
            ],
            [
                'slug'         => 'business-pe',
                'name'         => 'Business PE',
                'description'  => 'Mais recursos para empresas que querem performance e imagem profissional.',
                'monthly'      => '39,90',
                'annual'       => '34,90',
                'highlight'    => true,
                'tag'          => 'Mais escolhido',
                'button_text'  => 'Quero o Business PE',
                'features'     => [
                    '10 GB de armazenamento SSD',
                    '1 domínio principal',
                    '10 contas de e-mail',
                    'Banco de dados e subdomínios amplos',
                    'Certificado SSL grátis',
                    'WordPress + LiteSpeed Cache',
                    'Suporte humano em horário comercial',
                ],
            ],
            [
                'slug'         => 'pro-performance',
                'name'         => 'Pro Performance',
                'description'  => 'Para projetos com maior volume e necessidade de mais espaço.',
                'monthly'      => '59,90',
                'annual'       => '49,90',
                'highlight'    => false,
                'tag'          => null,
                'button_text'  => 'Falar sobre o Pro',
                'features'     => [
                    '25 GB de armazenamento SSD',
                    'Domínio principal + expansões',
                    '25 contas de e-mail',
                    'Recursos para múltiplos projetos',
                    'Atendimento prioritário',
                    'Backups diários',
                ],
            ],
        ];

        return view('pages.hospedagem', [
            'plans'           => $plans,
            'whmcsAvailable'  => $this->whmcs->isAvailable(),
        ]);
    }
}

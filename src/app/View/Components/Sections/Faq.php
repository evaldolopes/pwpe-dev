<?php

namespace App\View\Components\Sections;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Faq extends Component
{
    public array $items;

    /**
     * Create a new component instance.
     */
    public function __construct()
    {
        $this->items = [
            [
                'q' => 'Vocês fazem migração de site?',
                'a' => 'Sim. O ideal é transformar isso em CTA forte na home e também na página de hospedagem.',
            ],
            [
                'q' => 'Posso contratar só a hospedagem?',
                'a' => 'Sim. O cliente pode contratar somente a hospedagem e publicar seu próprio projeto.',
            ],
            [
                'q' => 'Vocês também criam o site?',
                'a' => 'Sim. A empresa pode vender hospedagem e criação de sites como soluções complementares.',
            ],
            [
                'q' => 'Tem suporte humano?',
                'a' => 'Sim. Esse é um diferencial forte da marca e precisa aparecer desde a primeira dobra.',
            ],
        ];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.sections.faq');
    }
}

<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Dropdown extends Component
{
    public string $align;
    public string $width;
    public string $contentClasses;

    public function __construct(string $align = 'right', string $width = '48', string $contentClasses = 'py-1 bg-white')
    {
        $this->align = $align;
        $this->width = $width;
        $this->contentClasses = $contentClasses;
    }

    public function render(): View|Closure|string
    {
        return view('components.dropdown');
    }
}

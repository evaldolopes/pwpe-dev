<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Modal extends Component
{
    public string $name;
    public bool $show;
    public string $maxWidth;

    public function __construct(string $name = '', bool $show = false, string $maxWidth = '2xl')
    {
        $this->name = $name;
        $this->show = $show;
        $this->maxWidth = $maxWidth;
    }

    public function render(): View|Closure|string
    {
        return view('components.modal');
    }
}

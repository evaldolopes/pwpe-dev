<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use App\Models\Testimonial;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function __invoke(): View
    {
        return view('pages.home', [
            'testimonials' => Testimonial::active()->limit(9)->get(),
        ]);
    }
}

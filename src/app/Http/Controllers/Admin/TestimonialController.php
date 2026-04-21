<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class TestimonialController extends Controller
{
    public function index()
    {
        $testimonials = Testimonial::orderBy('order')->orderBy('id')->get();
        return view('admin.testimonials.index', compact('testimonials'));
    }

    public function create()
    {
        return view('admin.testimonials.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'role'    => 'required|string|max:100',
            'city'    => 'required|string|max:100',
            'service' => 'required|string|max:100',
            'content' => 'required|string|max:500',
            'order'   => 'nullable|integer|min:0',
            'active'  => 'nullable|boolean',
        ]);

        $data['active'] = $request->boolean('active', true);
        $data['order']  = $data['order'] ?? 0;

        Testimonial::create($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Depoimento criado com sucesso.');
    }

    public function edit(Testimonial $testimonial)
    {
        return view('admin.testimonials.edit', compact('testimonial'));
    }

    public function update(Request $request, Testimonial $testimonial)
    {
        $data = $request->validate([
            'name'    => 'required|string|max:100',
            'role'    => 'required|string|max:100',
            'city'    => 'required|string|max:100',
            'service' => 'required|string|max:100',
            'content' => 'required|string|max:500',
            'order'   => 'nullable|integer|min:0',
            'active'  => 'nullable|boolean',
        ]);

        $data['active'] = $request->boolean('active');
        $data['order']  = $data['order'] ?? 0;

        $testimonial->update($data);

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Depoimento atualizado com sucesso.');
    }

    public function destroy(Testimonial $testimonial)
    {
        $testimonial->delete();

        return redirect()->route('admin.testimonials.index')
            ->with('success', 'Depoimento removido com sucesso.');
    }
}

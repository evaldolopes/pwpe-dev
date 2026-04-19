@props(['eyebrow' => null, 'title' => '', 'description' => null, 'center' => false])
<div class="{{ $center ? 'mx-auto max-w-3xl text-center' : 'max-w-3xl' }}">
    @if($eyebrow)
    <span class="text-sm font-semibold uppercase tracking-[0.22em] text-brand-600 dark:text-brand-300">{{ $eyebrow }}</span>
    @endif
    <h2 class="mt-3 text-3xl font-black md:text-5xl">{{ $title }}</h2>
    @if($description)
    <p class="mt-4 text-lg leading-8 text-slate-600 dark:text-slate-300">{{ $description }}</p>
    @endif
</div>
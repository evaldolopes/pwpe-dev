@props([
'href' => null,
'variant' => 'primary',
'size' => 'md',
])

@php
$base = 'inline-flex items-center justify-center rounded-2xl font-semibold transition duration-200';
$variants = [
'primary' => 'bg-brand-400 text-slate-950 hover:brightness-105',
'secondary' => 'border border-slate-300 bg-transparent text-slate-700 hover:bg-slate-100 dark:border-white/10 dark:bg-white/5 dark:text-white dark:hover:bg-white/10',
'ghost' => 'text-brand-600 hover:text-slate-900 dark:text-brand-300 dark:hover:text-white',
];
$sizes = [
'sm' => 'px-4 py-2 text-sm',
'md' => 'px-6 py-3 text-sm',
'lg' => 'px-6 py-4 text-base',
];
$classes = $base.' '.$variants[$variant].' '.$sizes[$size];
@endphp

@if ($href)
<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</a>
@else
<button {{ $attributes->merge(['class' => $classes]) }}>{{ $slot }}</button>
@endif
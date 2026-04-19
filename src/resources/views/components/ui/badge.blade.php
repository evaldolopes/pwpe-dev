@props(['variant' => 'default'])
@php
$variants = [
'default' => 'bg-slate-100 text-slate-600 dark:bg-white/10 dark:text-slate-300',
'primary' => 'bg-brand-400/15 text-brand-700 dark:text-brand-200',
'success' => 'bg-emerald-400/15 text-emerald-700 dark:text-emerald-300',
];
@endphp
<span {{ $attributes->merge(['class' => 'inline-flex items-center rounded-full px-3 py-1 text-xs font-bold uppercase tracking-[0.18em] '.$variants[$variant]]) }}>
    {{ $slot }}
</span>
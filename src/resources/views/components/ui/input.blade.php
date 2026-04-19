@props(['label' => null, 'name'])
<div>
    @if($label)
    <label for="{{ $name }}" class="mb-2 block text-sm font-medium text-slate-700 dark:text-slate-200">{{ $label }}</label>
    @endif
    <input id="{{ $name }}" name="{{ $name }}" {{ $attributes->merge(['class' => 'w-full rounded-2xl border border-slate-300 bg-white px-4 py-3 text-slate-900 outline-none transition placeholder:text-slate-400 focus:border-brand-400/50 dark:border-white/10 dark:bg-slate-900 dark:text-white dark:placeholder:text-slate-500']) }}>
</div>
@props(['highlight' => false])
<div {{ $attributes->merge(['class' => ($highlight ? 'border-brand-400/30 bg-gradient-to-b from-brand-400/10 to-brand-500/10' : 'border-slate-200 bg-white dark:border-white/10 dark:bg-white/5').' rounded-[28px] border p-6']) }}>
    {{ $slot }}
</div>
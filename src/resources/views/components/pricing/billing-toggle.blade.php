<div class="inline-flex rounded-2xl border border-slate-200 bg-slate-100 p-1 dark:border-white/10 dark:bg-white/5">
    <button @click="setBilling('monthly')" :class="billing === 'monthly' ? 'bg-brand-400 text-slate-950' : 'text-slate-600 dark:text-slate-300'" class="rounded-xl px-4 py-2 text-sm font-semibold transition">Mensal</button>
    <button @click="setBilling('annual')" :class="billing === 'annual' ? 'bg-brand-400 text-slate-950' : 'text-slate-600 dark:text-slate-300'" class="rounded-xl px-4 py-2 text-sm font-semibold transition">Anual</button>
</div>
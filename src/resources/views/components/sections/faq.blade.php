<section class="py-20" x-data="faqAccordion()">
    <x-ui.container>
        <x-ui.section-title eyebrow="Perguntas frequentes" title="Respostas que ajudam a fechar a venda" center="true" />

        <div class="mx-auto mt-10 max-w-5xl space-y-4">
            <template x-for="(item, index) in items" :key="index">
                <div class="rounded-2xl border border-slate-200 bg-white dark:border-white/10 dark:bg-slate-900/80">
                    <button @click="toggle(index)" class="flex w-full items-center justify-between gap-4 px-5 py-5 text-left font-semibold">
                        <span x-text="item.q"></span>
                        <span class="text-brand-600 dark:text-brand-300" x-text="open === index ? '−' : '+'"></span>
                    </button>
                    <div x-show="open === index" x-collapse class="px-5 pb-5 text-slate-500 dark:text-slate-400" x-text="item.a"></div>
                </div>
            </template>
        </div>
    </x-ui.container>
</section>
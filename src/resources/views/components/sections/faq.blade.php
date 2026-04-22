<section class="py-20" id="faq-section">
    <x-ui.container>
        <x-ui.section-title eyebrow="Perguntas frequentes" title="Respostas que ajudam a fechar a venda" center="true" />

        <div class="mx-auto mt-10 max-w-5xl space-y-4">
            @foreach($items as $index => $item)
                <div class="faq-item rounded-2xl border border-slate-200 bg-white dark:bg-slate-800 dark:border-slate-700" data-index="{{ $index }}">
                    <button type="button" class="faq-button flex w-full items-center justify-between gap-4 px-5 py-5 text-left font-semibold dark:text-white">
                        <span>{{ $item['q'] }}</span>
                        <span class="faq-icon text-brand-600">+</span>
                    </button>
                    <div class="faq-content hidden px-5 pb-5 text-slate-500 dark:text-slate-400">
                        {{ $item['a'] }}
                    </div>
                </div>
            @endforeach
        </div>
    </x-ui.container>
</section>
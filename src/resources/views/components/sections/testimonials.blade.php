<section class="bg-slate-50 py-20 dark:bg-slate-900/50">
    <x-ui.container>
        <x-ui.section-title eyebrow="Prova social" title="Mensagem certa para gerar confiança"
            description="Mesmo sem exibir depoimentos reais agora, a seção já pode ser preparada para receber casos de sucesso, avaliações e marcas atendidas." />

        @if($testimonials->count() > 0)
        <div class="mt-10 testimonials-swiper overflow-hidden cursor-grab active:cursor-grabbing">
            <div class="swiper-wrapper items-stretch">
                @foreach($testimonials as $testimonial)
                <div class="swiper-slide !h-auto flex">
                    <x-ui.card class="w-full flex-1 flex flex-col justify-between">
                        <p class="text-slate-600 dark:text-slate-400">"{{ $testimonial->content }}"</p>

                        <div class="mt-5">
                            @if($testimonial->name)
                            <div class="text-sm font-semibold text-slate-900 dark:text-white">{{ $testimonial->name }}
                            </div>
                            @endif
                            @if($testimonial->role)
                            <div class="text-sm font-semibold text-brand-600">{{ $testimonial->role }}</div>
                            @endif
                            @if($testimonial->service)
                            <div class="text-xs text-slate-500 mt-1 dark:text-slate-400">{{ $testimonial->service }}
                            </div>
                            @endif
                        </div>
                    </x-ui.card>
                </div>
                @endforeach
            </div>
        </div>
        @else
        <div class="mt-10 rounded-2xl border border-dashed border-slate-300 p-12 text-center dark:border-slate-700">
            <p class="text-slate-500 dark:text-slate-400">Nenhum depoimento cadastrado no momento.</p>
        </div>
        @endif
    </x-ui.container>
</section>

<section class="py-20">
    <x-ui.container>
        <div class="rounded-[32px] border border-brand-400/20 bg-gradient-to-r from-brand-400/10 via-white to-brand-500/10 dark:via-slate-800 dark:from-brand-400/10 dark:to-brand-500/10 p-8 md:p-12">
            <div class="grid gap-10 lg:grid-cols-[1.1fr_.9fr] lg:items-center">
                <div>
                    <span class="text-sm font-semibold uppercase tracking-[0.22em] text-brand-600">CTA final</span>
                    <h2 class="mt-3 text-3xl font-black md:text-5xl dark:text-white">Seu próximo site pode começar hoje</h2>
                    <p class="mt-5 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-400">
                        Escolha um plano, peça um orçamento ou fale com um especialista para entender qual estrutura faz mais sentido para o seu negócio.
                    </p>
                </div>
                <div class="grid gap-4 sm:grid-cols-2">
                    <x-ui.button href="https://wa.me/5500000000000" size="lg">Chamar no WhatsApp</x-ui.button>
                    <x-ui.button href="{{ route('contato') }}" variant="secondary" size="lg">Pedir proposta</x-ui.button>
                </div>
            </div>
        </div>
    </x-ui.container>
</section>
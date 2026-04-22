<section class="relative overflow-hidden">
    <div class="absolute inset-0 bg-[radial-gradient(circle_at_top_left,rgba(34,211,238,.22),transparent_28%),radial-gradient(circle_at_bottom_right,rgba(59,130,246,.18),transparent_24%)]"></div>

    <x-ui.container class="grid gap-14 py-16 lg:grid-cols-[1.15fr_.85fr] lg:py-24">
        <div class="relative z-10">
            <div class="mb-5 inline-flex items-center gap-2 rounded-full border border-brand-400/20 bg-brand-400/10 px-4 py-2 text-sm text-brand-600">
                <span class="h-2 w-2 rounded-full bg-brand-400"></span>
                Presença digital com suporte próximo e estrutura confiável
            </div>

            <h1 class="max-w-3xl text-4xl font-black leading-tight tracking-tight text-slate-900 dark:text-white md:text-6xl">
                Hospedagem e criação de sites para quem quer vender mais online.
            </h1>

            <p class="mt-6 max-w-2xl text-lg leading-8 text-slate-600 dark:text-slate-400">
                Seu projeto com mais velocidade, segurança e atendimento humano. Registre domínio, publique seu site e conte com uma equipe para cuidar da sua presença digital do jeito certo.
            </p>

            <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                <x-ui.button href="{{ route('hospedagem') }}" size="lg">Ver planos e escolher agora</x-ui.button>
                <x-ui.button href="{{ route('criacao-sites') }}" variant="secondary" size="lg">Quero um site profissional</x-ui.button>
            </div>
        </div>

        <div class="relative z-10">
            <x-ui.card class="rounded-[30px] p-5 shadow-2xl shadow-brand-900/20 backdrop-blur">
                <div class="rounded-[24px] border border-brand-400/15 bg-slate-100 dark:bg-slate-700/50 p-5">
                    <div class="flex items-center justify-between gap-4">
                        <div>
                            <p class="text-sm text-slate-500 dark:text-slate-400">Plano em destaque</p>
                            <h2 class="mt-1 text-2xl font-black dark:text-white">Hospedagem Business PE</h2>
                        </div>
                        <x-ui.badge variant="success">Mais escolhido</x-ui.badge>
                    </div>

                    <div class="mt-6 flex items-end gap-2">
                        <span class="text-5xl font-black text-brand-600">R$ 39,90</span>
                        <span class="pb-2 text-slate-500">/mês</span>
                    </div>

                    <p class="mt-3 text-sm text-slate-500 dark:text-slate-400">Ideal para sites institucionais, WordPress e pequenos e-commerces.</p>

                    <ul class="mt-6 space-y-3 text-sm text-slate-700 dark:text-slate-300">
                        <li class="flex items-center gap-3"><x-ui.icon name="check" /> 10 GB SSD</li>
                        <li class="flex items-center gap-3"><x-ui.icon name="check" /> 10 contas de e-mail</li>
                        <li class="flex items-center gap-3"><x-ui.icon name="check" /> SSL grátis</li>
                        <li class="flex items-center gap-3"><x-ui.icon name="check" /> WordPress com instalação rápida</li>
                        <li class="flex items-center gap-3"><x-ui.icon name="check" /> Suporte técnico especializado</li>
                    </ul>

                    <x-ui.button href="{{ route('contato') }}" class="mt-6 w-full justify-center">Começar com esse plano</x-ui.button>
                </div>
            </x-ui.card>
        </div>
    </x-ui.container>
</section>
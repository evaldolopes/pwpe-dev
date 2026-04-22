<section class="py-20">
    <x-ui.container>
        <div class="grid gap-10 lg:grid-cols-2 lg:items-center">
            <div>
                <x-ui.section-title
                    eyebrow="Criação de sites"
                    title="Seu site pronto para passar confiança e gerar contatos"
                    description="Além da hospedagem, o Portal Web PE pode assumir o desenvolvimento do seu site com estratégia, design responsivo, textos orientados à conversão e base técnica preparada para SEO." />

                <div class="mt-8 flex flex-col gap-4 sm:flex-row">
                    <x-ui.button href="{{ route('contato') }}" size="lg">Solicitar orçamento de site</x-ui.button>
                    <x-ui.button href="{{ route('faq') }}" variant="secondary" size="lg">Tirar dúvidas antes</x-ui.button>
                </div>
            </div>

            <div class="grid gap-5 sm:grid-cols-2">
                <x-ui.card>
                    <h3 class="text-xl font-bold dark:text-white">Site institucional</h3>
                    <p class="mt-3 text-slate-400">Para empresas, clínicas, prestadores de serviço e marcas locais.</p>
                </x-ui.card>
                <x-ui.card>
                    <h3 class="text-xl font-bold dark:text-white">Landing pages</h3>
                    <p class="mt-3 text-slate-400">Páginas pensadas para campanhas e captação de leads.</p>
                </x-ui.card>
                <x-ui.card>
                    <h3 class="text-xl font-bold dark:text-white">SEO técnico</h3>
                    <p class="mt-3 text-slate-400">Estrutura, headings, velocidade, schema e boas práticas on-page.</p>
                </x-ui.card>
                <x-ui.card>
                    <h3 class="text-xl font-bold dark:text-white">Suporte contínuo</h3>
                    <p class="mt-3 text-slate-400">Ajustes, conteúdo e acompanhamento após publicação.</p>
                </x-ui.card>
            </div>
        </div>
    </x-ui.container>
</section>
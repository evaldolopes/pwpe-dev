<x-layout.app
    title="Contato | Portal Web PE"
    description="Fale com a Portal Web PE para contratar hospedagem, solicitar criação de site ou tirar dúvidas sobre serviços."
>
    <x-common.page-hero
        title="Fale com a Portal Web PE"
        subtitle="Use o formulário abaixo para pedir proposta, tirar dúvidas ou conversar sobre a melhor solução para seu projeto."
    />

    <section class="py-20">
        <x-ui.container>
            <div class="grid gap-10 lg:grid-cols-[.95fr_1.05fr]">
                <x-ui.card>
                    <x-ui.section-title
                        eyebrow="Contato comercial"
                        title="Vamos conversar sobre seu projeto"
                        description="Você pode ajustar os dados reais de atendimento, e-mail, WhatsApp e horários assim que for subir a versão final."
                    />

                    <div class="mt-8 space-y-5 text-slate-600 dark:text-slate-300">
                        <div>
                            <div class="text-sm uppercase tracking-[0.18em] text-slate-500 dark:text-slate-400">WhatsApp</div>
                            <div class="mt-1 font-semibold text-slate-900 dark:text-white">(00) 00000-0000</div>
                        </div>
                        <div>
                            <div class="text-sm uppercase tracking-[0.18em] text-slate-500 dark:text-slate-400">E-mail</div>
                            <div class="mt-1 font-semibold text-slate-900 dark:text-white">contato@portalwebpe.com.br</div>
                        </div>
                        <div>
                            <div class="text-sm uppercase tracking-[0.18em] text-slate-500 dark:text-slate-400">Atendimento</div>
                            <div class="mt-1 font-semibold text-slate-900 dark:text-white">Segunda a sexta, das 8h às 18h</div>
                        </div>
                    </div>
                </x-ui.card>

                <x-ui.card>
                    <form action="#" method="POST" class="space-y-5">
                        @csrf
                        <div class="grid gap-5 md:grid-cols-2">
                            <x-ui.input name="name" label="Seu nome" placeholder="Digite seu nome" />
                            <x-ui.input name="email" label="Seu e-mail" type="email" placeholder="Digite seu e-mail" />
                        </div>

                        <div class="grid gap-5 md:grid-cols-2">
                            <x-ui.input name="phone" label="WhatsApp" placeholder="Digite seu telefone" />
                            <x-ui.input name="subject" label="Assunto" placeholder="Ex.: Hospedagem Business PE" />
                        </div>

                        <x-ui.textarea name="message" label="Mensagem" placeholder="Conte o que você precisa para seu projeto" />

                        <x-ui.button type="submit" class="w-full justify-center">Enviar mensagem</x-ui.button>
                    </form>
                </x-ui.card>
            </div>
        </x-ui.container>
    </section>
</x-layout.app>

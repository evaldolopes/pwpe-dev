<section class="bg-slate-50 py-20 dark:bg-slate-900/50" id="pricing-section">
    <x-ui.container>
        <div class="mx-auto max-w-4xl text-center">
            <x-ui.section-title
                eyebrow="Planos de hospedagem"
                title="Escolha um plano para publicar seu site com segurança"
                description="Estrutura comercial com clareza e valor percebido, pensada para aumentar conversão." />
        </div>

        <div class="mt-10 flex justify-center">
            <x-pricing.billing-toggle />
        </div>

        <div class="group/tiers isolate mx-auto mt-10 grid max-w-md grid-cols-1 gap-8 lg:mx-0 lg:max-w-none lg:grid-cols-3">
            <x-pricing.plan-card
                name="Start PE"
                description="Para quem está começando com presença profissional."
                monthlyPrice="29,90"
                annualPrice="24,90"
                buttonText="Contratar Start PE"
                :features="['5 GB SSD', '1 domínio', '5 contas de e-mail', 'SSL grátis', 'Backup periódico']" />

            <x-pricing.plan-card
                name="Business PE"
                description="Mais recursos para empresas que querem performance e imagem profissional."
                monthlyPrice="39,90"
                annualPrice="34,90"
                tag="Recomendado"
                :highlight="true"
                buttonText="Quero o Business PE"
                :features="['10 GB SSD', '1 domínio', '10 contas de e-mail', 'Banco de dados e subdomínios amplos', 'SSL grátis + WordPress fácil']" />

            <x-pricing.plan-card
                name="Pro Performance"
                description="Para projetos com maior volume e necessidade de mais espaço."
                monthlyPrice="59,90"
                annualPrice="49,90"
                buttonText="Falar sobre o Pro"
                :features="['25 GB SSD', 'Domínio principal + expansões', '25 contas de e-mail', 'Recursos para múltiplos projetos', 'Atendimento prioritário']" />
        </div>
    </x-ui.container>
</section>

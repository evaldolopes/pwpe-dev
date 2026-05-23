<section class="section" id="pricing-section">
    <div class="container">
        <div class="text-center">
            <span class="eyebrow">Planos de Hospedagem</span>
            <h2 class="section-title">Escolha o plano ideal para o seu site</h2>
            <p class="section-subtitle">Todos com cPanel, SSL gratis, backup diario e suporte humano em portugues.</p>
        </div>

        <div class="text-center mb-5">
            <div class="billing-toggle-wrap" id="billingToggle">
                <button class="bt-btn active" data-period="monthly">Mensal</button>
                <button class="bt-btn" data-period="annual">Anual <span class="badge ms-1" style="background:var(--accent);font-size:.7rem;">-15%</span></button>
            </div>
        </div>

        <div class="row g-4 align-items-stretch justify-content-center" id="plansContainer">
            <x-pricing.plan-card
                name="Start PE"
                description="Para quem esta comecando com presenca profissional."
                monthlyPrice="29,90"
                annualPrice="24,90"
                buttonText="Contratar Start PE"
                :features="['5 GB SSD NVMe', '1 dominio principal', '5 contas de e-mail', 'SSL gratuito', 'Backup diario', 'Instalador WordPress']" />

            <x-pricing.plan-card
                name="Business PE"
                description="Mais recursos para empresas que querem performance e imagem profissional."
                monthlyPrice="39,90"
                annualPrice="34,90"
                tag="Recomendado"
                :highlight="true"
                buttonText="Quero o Business PE"
                :features="['10 GB SSD NVMe', '1 dominio + subdomínios', '10 contas de e-mail', 'SSL gratuito + WordPress facil', 'Backup diario automatico', 'Suporte prioritario']" />

            <x-pricing.plan-card
                name="Pro Performance"
                description="Para projetos com maior volume e necessidade de mais espaco."
                monthlyPrice="59,90"
                annualPrice="49,90"
                buttonText="Falar sobre o Pro"
                :features="['25 GB SSD NVMe', 'Dominio + expansoes', '25 contas de e-mail', 'Recursos para multiplos projetos', 'Backup diario automatico', 'Atendimento prioritario']" />
        </div>
    </div>
</section>
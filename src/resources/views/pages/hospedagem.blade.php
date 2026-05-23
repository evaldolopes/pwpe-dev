<x-layout.app
    title="Hospedagem de Sites | Portal Web PE"
    description="Planos de hospedagem com SSL gratis, backup diario, cPanel e suporte humano em portugues. Ideal para sites profissionais.">

    <x-common.page-hero
        title="Hospedagem de Sites"
        subtitle="Planos com SSD NVMe, cPanel completo, SSL gratis, backup diario e suporte humano para seu site sempre no ar."
        breadcrumb="Hospedagem" />

    <x-sections.pricing />

    <section class="section bg-light-custom">
        <div class="container">
            <div class="text-center">
                <span class="eyebrow">Compare recursos</span>
                <h2 class="section-title">O que cada plano oferece</h2>
            </div>
            <x-pricing.compare-table />
        </div>
    </section>

    <x-sections.faq />
    <x-sections.cta />
</x-layout.app>
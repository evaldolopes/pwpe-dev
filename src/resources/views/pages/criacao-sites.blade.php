<x-layout.app
    title="Criacao de Sites e Sistemas | Portal Web PE"
    description="Criacao de sites profissionais, landing pages e sistemas web sob medida com design responsivo para Pernambuco e Brasil.">

    <x-common.page-hero
        title="Criacao de Sites e Sistemas Web"
        subtitle="Sites institucionais, landing pages e sistemas web sob medida com design moderno e foco em resultado para seu negocio."
        breadcrumb="Criacao de Sites" />

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="eyebrow">Projeto sob medida</span>
                    <h2 class="section-title">Um site que valoriza sua marca</h2>
                    <p style="color:var(--gray);line-height:1.9;">Design moderno, responsivo em todos os dispositivos, carregamento rapido e preparado para SEO. Desenvolvemos o site ideal para o seu negocio.</p>
                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <a href="{{ route('contato') }}" class="btn btn-accent">
                            <i class="bi bi-whatsapp me-2"></i> Pedir orcamento
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-building"></i></div>
                                <h3 class="h5">Institucional</h3>
                                <p class="small">Para empresas, clinicas, profissionais liberais e comercio local.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-funnel"></i></div>
                                <h3 class="h5">Landing Page</h3>
                                <p class="small">Para campanhas e paginas focadas em conversao e captacao de leads.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-graph-up-arrow"></i></div>
                                <h3 class="h5">SEO Tecnico</h3>
                                <p class="small">Estrutura com headings corretos, meta tags, performance e semantica.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-tools"></i></div>
                                <h3 class="h5">Suporte Continuo</h3>
                                <p class="small">Apos publicar, suporte para ajustes e manutencao continuada.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sections.testimonials :testimonials="collect()" />
    <x-sections.cta />
</x-layout.app>
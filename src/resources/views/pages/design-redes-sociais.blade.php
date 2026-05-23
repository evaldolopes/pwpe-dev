<x-layout.app
    title="Design para Redes Sociais | Portal Web PE"
    description="Criacao de Link da Bio, cards para Instagram e Facebook, e identidade visual para redes sociais em Pernambuco.">

    <x-common.page-hero
        title="Design para Redes Sociais"
        subtitle="Link da Bio personalizados, cards e banners para Instagram e Facebook. Identidade visual que comunica e converte."
        breadcrumb="Design para Redes" />

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="eyebrow">Presenca nas redes sociais</span>
                    <h2 class="section-title">Sua marca com visual profissional nas redes</h2>
                    <p style="color:var(--gray);line-height:1.9;">Redes sociais com design inconsistente transmitem amadorismo. Criamos materiais visuais que refletem a identidade da sua marca e engajam seu publico com qualidade e coerencia.</p>
                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <a href="{{ route('contato') }}" class="btn btn-accent">
                            <i class="bi bi-whatsapp me-2"></i> Solicitar orcamento
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-link-45deg"></i></div>
                                <h3 class="h5">Link da Bio</h3>
                                <p class="small">Pagina personalizada com links para WhatsApp, site, produtos e redes.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-instagram"></i></div>
                                <h3 class="h5">Cards Instagram</h3>
                                <p class="small">Posts, stories e reels com design alinhado a identidade da sua marca.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-facebook"></i></div>
                                <h3 class="h5">Cards Facebook</h3>
                                <p class="small">Capas, banners e posts para Facebook com visual profissional.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-palette"></i></div>
                                <h3 class="h5">Identidade Visual</h3>
                                <p class="small">Paleta de cores, tipografia e elementos visuais consistentes.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sections.cta />
</x-layout.app>
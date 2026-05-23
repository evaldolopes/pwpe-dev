<x-layout.app
    title="Manutencao de Sites | Portal Web PE"
    description="Servico de manutencao de sites com atualizacoes, correcoes, ajustes de layout e suporte tecnico continuo.">

    <x-common.page-hero
        title="Manutencao de Sites"
        subtitle="Seu site sempre atualizado, seguro e funcionando corretamente. Cuidamos de tudo para voce focar no seu negocio."
        breadcrumb="Manutencao de Sites" />

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <span class="eyebrow">Suporte tecnico continuo</span>
                    <h2 class="section-title">Foco no negocio, sem preocupacao com o site</h2>
                    <p style="color:var(--gray);line-height:1.9;">Sites desatualizados perdem visitas, credibilidade e seguranca. Com nosso servico de manutencao, seu site fica sempre em dia com atualizacoes, correcoes de bugs e melhorias continuas.</p>
                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <a href="{{ route('contato') }}" class="btn btn-accent">
                            <i class="bi bi-whatsapp me-2"></i> Solicitar manutencao
                        </a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-arrow-repeat"></i></div>
                                <h3 class="h5">Atualizacoes</h3>
                                <p class="small">WordPress, plugins e temas sempre na versao mais segura e estavel.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-bug"></i></div>
                                <h3 class="h5">Correcao de Bugs</h3>
                                <p class="small">Identificamos e corrigimos erros que impactam experiencia e conversao.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-palette2"></i></div>
                                <h3 class="h5">Ajustes de Layout</h3>
                                <p class="small">Pequenas mudancas visuais, banners, textos e ajustes de design.</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card">
                                <div class="feature-icon"><i class="bi bi-shield-check"></i></div>
                                <h3 class="h5">Seguranca</h3>
                                <p class="small">Monitoramento de vulnerabilidades e atualizacoes de seguranca.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sections.cta />
</x-layout.app>
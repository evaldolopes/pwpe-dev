<x-layout.app
    title="Sobre a Portal Web PE | Hospedagem e Criacao de Sites em Pernambuco"
    description="Conheca a Portal Web PE, sua parceira em hospedagem, criacao de sites e presenca digital com atendimento proximo.">

    <x-common.page-hero
        title="Sobre a Portal Web PE"
        subtitle="Mais de 10 anos conectando empresas pernambucanas ao mundo digital com atendimento proximo e solucoes praticas."
        breadcrumb="Sobre" />

    <section class="section">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7">
                    <span class="eyebrow">Nossa historia</span>
                    <h2 class="section-title">Parceiro de presenca digital para o seu negocio</h2>
                    <div class="mt-4" style="color:var(--gray);line-height:1.9;font-size:1.05rem;">
                        <p>A Portal Web PE nasceu da necessidade real de empresas pernambucanas terem acesso a servicos digitais de qualidade, com suporte em portugues e atendimento humano.</p>
                        <p>Atuamos com hospedagem profissional, criacao de sites modernos e responsivos, manutencao e suporte, e servicos de design para redes sociais. Tudo pensado para empresas que querem crescer online.</p>
                        <p>Nosso diferencial e o atendimento proximo: voce fala com pessoas reais, que entendem sua necessidade e buscam a melhor solucao para o seu negocio.</p>
                    </div>
                    <div class="mt-4 d-flex flex-wrap gap-3">
                        <a href="{{ route('contato') }}" class="btn btn-accent">
                            <i class="bi bi-whatsapp me-2"></i> Fale conosco
                        </a>
                        <a href="{{ route('hospedagem') }}" class="btn btn-outline-primary">
                            Ver planos de hospedagem
                        </a>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="row g-4">
                        <div class="col-6">
                            <div class="feature-card text-center">
                                <div class="num" style="font-size:2.5rem;font-weight:800;color:var(--primary);">10+</div>
                                <p class="mt-2 mb-0">Anos de experiencia</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card text-center">
                                <div class="num" style="font-size:2.5rem;font-weight:800;color:var(--primary);">200+</div>
                                <p class="mt-2 mb-0">Clientes ativos</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card text-center">
                                <div class="num" style="font-size:2.5rem;font-weight:800;color:var(--primary);">99,9%</div>
                                <p class="mt-2 mb-0">Uptime garantido</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="feature-card text-center">
                                <div class="num" style="font-size:2.5rem;font-weight:800;color:var(--accent);">100%</div>
                                <p class="mt-2 mb-0">Suporte humano</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section bg-light-custom">
        <div class="container">
            <div class="text-center">
                <span class="eyebrow">Nossa equipe</span>
                <h2 class="section-title">Quem esta por tras da Portal Web PE</h2>
            </div>
            <div class="row g-4 justify-content-center">
                <div class="col-md-6 col-lg-4">
                    <div class="team-card">
                        <div class="team-avatar">EL</div>
                        <div class="body">
                            <h4>Evaldo Lopes</h4>
                            <p class="role">Responsavel Tecnico</p>
                            <p class="mt-3 small" style="color:var(--gray);">Desenvolvedor e gestor com experiencia em hospedagem, criacao de sistemas e solucoes web para pequenas e medias empresas.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <x-sections.cta />
</x-layout.app>
@props(['faqs' => []])
<section class="section bg-light-custom">
    <div class="container">
        <div class="text-center">
            <span class="eyebrow">Duvidas frequentes</span>
            <h2 class="section-title">Perguntas frequentes</h2>
            <p class="section-subtitle">Encontre rapidamente a resposta que procura.</p>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-9">
                @forelse($faqs as $item)
                <div class="faq-item">
                    <button class="faq-question">{{ $item['question'] }}</button>
                    <div class="faq-answer"><p>{{ $item['answer'] }}</p></div>
                </div>
                @empty
                <div class="faq-item">
                    <button class="faq-question">O que esta incluso nos planos de hospedagem?</button>
                    <div class="faq-answer"><p>Todos os planos incluem cPanel, SSL gratuito, backup diario, contas de e-mail e instalador de WordPress com 1 clique. Cada plano tem limites de espaco, e-mails e bancos de dados distintos.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Como funciona o suporte tecnico?</button>
                    <div class="faq-answer"><p>Oferecemos suporte humano via WhatsApp e e-mail, de segunda a sexta-feira das 8h as 18h. Nao usamos bots, voce fala diretamente com nossa equipe tecnica.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Posso migrar meu site de outra hospedagem?</button>
                    <div class="faq-answer"><p>Sim! Realizamos a migracao de sites, e-mails e bancos de dados sem custo adicional. Nossa equipe cuida de todo o processo para que voce nao perca nada.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Qual e a diferenca entre os planos de hospedagem?</button>
                    <div class="faq-answer"><p>Os planos diferem em espaco em disco, numero de e-mails, bancos de dados e recursos de performance. O plano Pro Performance e ideal para sites com maior trafego ou lojas virtuais.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">Voces criam sites para qualquer tipo de negocio?</button>
                    <div class="faq-answer"><p>Sim! Desenvolvemos sites institucionais, landing pages, portfolios, blogs e sistemas web para empresas de todos os portes e segmentos.</p></div>
                </div>
                <div class="faq-item">
                    <button class="faq-question">O que e Design para Redes Sociais?</button>
                    <div class="faq-answer"><p>E um servico de criacao de materiais visuais para Instagram, Facebook e outras redes: Link da Bio personalizado, cards e banners para postagens e historias, mantendo a identidade visual da sua marca.</p></div>
                </div>
                @endforelse
            </div>
        </div>
    </div>
</section>
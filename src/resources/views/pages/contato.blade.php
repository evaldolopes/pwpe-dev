<x-layout.app
    title="Contato | Portal Web PE"
    description="Fale com a Portal Web PE. Solicite hospedagem, criacao de site ou tire suas duvidas via WhatsApp, e-mail ou formulario.">

    <x-common.page-hero
        title="Fale com a Portal Web PE"
        subtitle="Use o formulario, o WhatsApp ou o e-mail. Nossa equipe responde rapido e sem bots."
        breadcrumb="Contato" />

    <section class="section-sm">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-6 col-lg-3">
                    <a href="https://wa.me/5581987149045" class="feature-card text-center text-decoration-none d-block">
                        <div class="feature-icon mx-auto" style="background:rgba(37,211,102,.1);color:#25D366;"><i class="bi bi-whatsapp"></i></div>
                        <h3>WhatsApp</h3>
                        <p>(81) 98714-9045</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <a href="mailto:contato@portalwebpe.com.br" class="feature-card text-center text-decoration-none d-block">
                        <div class="feature-icon mx-auto"><i class="bi bi-envelope-fill"></i></div>
                        <h3>E-mail</h3>
                        <p>contato@portalwebpe.com.br</p>
                    </a>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto"><i class="bi bi-geo-alt-fill"></i></div>
                        <h3>Endereco</h3>
                        <p>Jaboatao dos Guararapes/PE</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="feature-card text-center">
                        <div class="feature-icon mx-auto"><i class="bi bi-clock-fill"></i></div>
                        <h3>Horario</h3>
                        <p>Seg-Sex, das 8h as 18h</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section pt-3">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7">
                    <div class="contact-form">
                        <h2 class="h3 mb-2">Envie sua mensagem</h2>
                        <p class="text-muted mb-4">Respondemos em ate 1 hora util. Para urgencias, use o WhatsApp.</p>
                        <form action="#" method="POST">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <label class="form-label">Nome completo *</label>
                                    <input type="text" name="name" class="form-control" placeholder="Seu nome" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">E-mail *</label>
                                    <input type="email" name="email" class="form-control" placeholder="seu@email.com" required>
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">WhatsApp</label>
                                    <input type="tel" name="phone" class="form-control" placeholder="(81) 99999-9999">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label">Empresa</label>
                                    <input type="text" name="company" class="form-control" placeholder="Nome da empresa">
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Como podemos ajudar? *</label>
                                    <select name="subject" class="form-select" required>
                                        <option value="">Selecione um assunto</option>
                                        <option>Quero contratar hospedagem</option>
                                        <option>Quero criar um site</option>
                                        <option>Manutencao de site existente</option>
                                        <option>Design para Redes Sociais</option>
                                        <option>Duvidas sobre servicos</option>
                                        <option>Outro assunto</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <label class="form-label">Mensagem *</label>
                                    <textarea name="message" class="form-control" rows="5" placeholder="Conte-nos brevemente sua necessidade..." required></textarea>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-accent btn-lg w-100">
                                        <i class="bi bi-send-fill me-2"></i> Enviar mensagem
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-info-card">
                        <h3>Informacoes de contato</h3>
                        <p style="color:rgba(255,255,255,.85);" class="mb-4">Nossa equipe esta pronta para ajudar voce.</p>
                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-geo-alt-fill"></i></div>
                            <div>
                                <p class="info-label">Endereco</p>
                                <p class="info-value">Rua Padre Chromacio Leao, 112<br>Centro, Jaboatao dos Guararapes/PE<br>CEP 54.080-330</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-whatsapp"></i></div>
                            <div>
                                <p class="info-label">WhatsApp Comercial</p>
                                <p class="info-value">(81) 98714-9045</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-envelope-fill"></i></div>
                            <div>
                                <p class="info-label">E-mail</p>
                                <p class="info-value">contato@portalwebpe.com.br</p>
                            </div>
                        </div>
                        <div class="info-item">
                            <div class="info-icon"><i class="bi bi-clock-fill"></i></div>
                            <div>
                                <p class="info-label">Horario de atendimento</p>
                                <p class="info-value">Segunda a sexta, das 8h as 18h</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-layout.app>
<footer class="footer">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-4 col-md-6">
                <div class="footer-brand">Portal Web <span class="brand-accent">PE</span></div>
                <p class="footer-tagline">Hospedagem profissional, criacao de sites e presenca digital com atendimento proximo e foco em resultado.</p>
                <div class="social-icons">
                    <a href="https://wa.me/5581987149045" aria-label="WhatsApp"><i class="bi bi-whatsapp"></i></a>
                    <a href="#" aria-label="Facebook"><i class="bi bi-facebook"></i></a>
                    <a href="#" aria-label="Instagram"><i class="bi bi-instagram"></i></a>
                    <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
                </div>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <h5>Solucoes</h5>
                <a href="{{ route('hospedagem') }}">Hospedagem</a>
                <a href="{{ route('servicos.criacao') }}">Criacao de Sites</a>
                <a href="{{ route('servicos.manutencao') }}">Manutencao de Sites</a>
                <a href="{{ route('servicos.design') }}">Design para Redes</a>
            </div>
            <div class="col-lg-2 col-md-6 col-6">
                <h5>Institucional</h5>
                <a href="{{ route('sobre') }}">Sobre nos</a>
                <a href="{{ route('faq') }}">FAQ</a>
                <a href="{{ route('contato') }}">Contato</a>
            </div>
            <div class="col-lg-4 col-md-6">
                <h5>Atendimento</h5>
                <p style="font-size:0.95rem; line-height:2;">
                    <i class="bi bi-whatsapp me-2 text-accent"></i> (81) 98714-9045<br>
                    <i class="bi bi-envelope me-2 text-accent"></i> contato@portalwebpe.com.br<br>
                    <i class="bi bi-geo-alt me-2 text-accent"></i> Jaboatao dos Guararapes/PE<br>
                    <i class="bi bi-clock me-2 text-accent"></i> Seg-Sex, das 8h as 18h
                </p>
            </div>
        </div>
        <div class="footer-bottom text-center">
            &copy; {{ date('Y') }} Portal Web PE. Todos os direitos reservados.<br>
            <small>Rua Padre Chromacio Leao, 112, Centro, Jaboatao dos Guararapes/PE &mdash; CEP 54.080-330</small>
        </div>
    </div>
</footer>
<section class="section bg-light-custom">
    <div class="container">
        <div class="text-center">
            <span class="eyebrow">Prova social</span>
            <h2 class="section-title">O que nossos clientes dizem</h2>
            <p class="section-subtitle">Empresas que confiam na Portal Web PE para sua presenca digital.</p>
        </div>
        @if($testimonials->count() > 0)
        <div class="row g-4">
            @foreach($testimonials as $testimonial)
            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"{{ $testimonial->content }}"</p>
                    <div class="testimonial-author">
                        <div class="avatar">{{ strtoupper(substr($testimonial->name ?? 'C', 0, 1)) }}</div>
                        <div>
                            <p class="name">{{ $testimonial->name ?? 'Cliente' }}</p>
                            <p class="role">{{ $testimonial->role ?? '' }}</p>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="row g-4">
            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"Meu site ficou incrivel e a hospedagem e super rapida. Atendimento humano e diferenciado, recomendo!"</p>
                    <div class="testimonial-author">
                        <div class="avatar">M</div>
                        <div>
                            <p class="name">Maria S.</p>
                            <p class="role">Proprietaria de Boutique</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"Migramos para a Portal Web PE e o ganho de velocidade foi imediato. Suporte rapido e atencioso."</p>
                    <div class="testimonial-author">
                        <div class="avatar">J</div>
                        <div>
                            <p class="name">Joao R.</p>
                            <p class="role">Gerente de Marketing</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4">
                <div class="testimonial-card">
                    <div class="quote-icon"><i class="bi bi-quote"></i></div>
                    <div class="stars">
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                    </div>
                    <p>"Meu sistema esta no ar ha 2 anos sem nenhum problema. Excelente custo-beneficio e equipe dedicada."</p>
                    <div class="testimonial-author">
                        <div class="avatar">C</div>
                        <div>
                            <p class="name">Carlos A.</p>
                            <p class="role">Empreendedor Digital</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>
</section>
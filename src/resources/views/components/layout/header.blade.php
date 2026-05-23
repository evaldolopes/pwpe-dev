<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="{{ route('home') }}">
            <span class="brand-icon"><i class="bi bi-globe"></i></span>
            Portal Web <span class="brand-accent ms-1">PE</span>
        </a>
        <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu"
            aria-controls="navMenu" aria-expanded="false" aria-label="Abrir menu">
            <i class="bi bi-list fs-3"></i>
        </button>
        <div class="collapse navbar-collapse" id="navMenu">
            <ul class="navbar-nav ms-auto align-items-lg-center">
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">Início</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('hospedagem') ? 'active' : '' }}" href="{{ route('hospedagem') }}">Hospedagem</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle {{ request()->routeIs('servicos.*') ? 'active' : '' }}"
                        href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Serviços
                    </a>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="{{ route('servicos.criacao') }}">
                                <i class="bi bi-code-slash me-2 text-primary-custom"></i> Criação de Sites e Sistemas
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('servicos.manutencao') }}">
                                <i class="bi bi-tools me-2 text-primary-custom"></i> Manutenção de Sites
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('servicos.design') }}">
                                <i class="bi bi-palette me-2 text-primary-custom"></i> Design para Redes Sociais
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('sobre') ? 'active' : '' }}" href="{{ route('sobre') }}">Sobre</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('faq') ? 'active' : '' }}" href="{{ route('faq') }}">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ request()->routeIs('contato') ? 'active' : '' }}" href="{{ route('contato') }}">Contato</a>
                </li>
                <li class="nav-item ms-lg-3 mt-2 mt-lg-0">
                    <a class="btn btn-accent btn-sm" href="{{ route('contato') }}">
                        <i class="bi bi-rocket-takeoff me-1"></i> Contratar
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>
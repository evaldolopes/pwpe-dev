<header class="sticky top-0 z-50 border-b border-slate-200 bg-white/90 backdrop-blur-xl dark:bg-slate-900/90 dark:border-slate-700">
    <div class="mx-auto flex max-w-7xl items-center justify-between px-4 py-4 lg:px-6">
        <a href="{{ route('home') }}" class="flex items-center gap-3">
            <div class="flex h-11 w-11 items-center justify-center rounded-2xl bg-gradient-to-br from-brand-400 to-brand-600 font-black text-slate-950 shadow-lg shadow-brand-500/30">
                PW
            </div>
            <div>
                <div class="text-lg font-extrabold tracking-wide dark:text-white">Portal Web PE</div>
                <div class="text-xs text-slate-500 dark:text-slate-400">Hospedagem, sites e presença digital</div>
            </div>
        </a>

        <nav class="hidden items-center gap-7 lg:flex">
            <a href="{{ route('home') }}" class="text-sm text-slate-700 transition hover:text-brand-600 dark:text-slate-300 dark:hover:text-brand-400">Home</a>
            <a href="{{ route('hospedagem') }}" class="text-sm text-slate-700 transition hover:text-brand-600 dark:text-slate-300 dark:hover:text-brand-400">Hospedagem</a>
            <a href="{{ route('criacao-sites') }}" class="text-sm text-slate-700 transition hover:text-brand-600 dark:text-slate-300 dark:hover:text-brand-400">Criação de sites</a>
            <a href="{{ route('sobre') }}" class="text-sm text-slate-700 transition hover:text-brand-600 dark:text-slate-300 dark:hover:text-brand-400">Sobre</a>
            <a href="{{ route('faq') }}" class="text-sm text-slate-700 transition hover:text-brand-600 dark:text-slate-300 dark:hover:text-brand-400">FAQ</a>
            <a href="{{ route('contato') }}" class="rounded-full bg-brand-400 px-5 py-2.5 text-sm font-semibold text-slate-950 transition hover:scale-[1.02]">
                Falar com especialista
            </a>
        </nav>

        <button id="mobile-menu-toggle" type="button" class="inline-flex rounded-xl border border-slate-200 p-2 lg:hidden dark:border-slate-700 dark:text-slate-300">
            <svg class="h-6 w-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <x-layout.mobile-menu />
</header>
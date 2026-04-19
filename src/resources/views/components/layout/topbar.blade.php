<div class="border-b border-brand-400/10 bg-white/90 backdrop-blur dark:bg-slate-950/90">
    <div class="mx-auto flex max-w-7xl items-center justify-between gap-4 px-4 py-2 text-xs text-slate-600 dark:text-slate-300 lg:px-6">
        <div class="flex flex-wrap items-center gap-3 md:gap-5">
            <span class="inline-flex items-center gap-2">
                <span class="h-2 w-2 rounded-full bg-emerald-400"></span>
                Infraestrutura estável e suporte próximo
            </span>
            <span class="hidden sm:inline">Migração assistida para novos clientes</span>
        </div>
        <div class="hidden items-center gap-4 md:flex">
            <a href="{{ route('faq') }}" class="transition hover:text-brand-600 dark:hover:text-brand-300">FAQ</a>
            <a href="{{ route('contato') }}" class="transition hover:text-brand-600 dark:hover:text-brand-300">Contato</a>

            {{-- Toggle claro / escuro --}}
            <button
                @click="toggleDarkMode()"
                type="button"
                class="rounded-full p-1.5 transition hover:bg-slate-100 dark:hover:bg-white/10"
                :title="darkMode ? 'Mudar para modo claro' : 'Mudar para modo escuro'"
                aria-label="Alternar tema">
                {{-- Sol (modo claro ativo) --}}
                <svg x-show="darkMode" class="h-4 w-4 text-slate-300" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.166 17.834a.75.75 0 0 0-1.06 1.06l1.59 1.591a.75.75 0 1 0 1.061-1.06l-1.59-1.591ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.166 6.166a.75.75 0 0 0 1.06 1.06l1.59-1.59a.75.75 0 1 0-1.06-1.061l-1.59 1.59Z" />
                </svg>
                {{-- Lua (modo escuro ativo) --}}
                <svg x-show="!darkMode" x-cloak class="h-4 w-4 text-slate-600" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
                </svg>
            </button>

            <a href="#" class="rounded-full border border-brand-400/30 px-3 py-1 text-brand-600 transition hover:bg-brand-400/10 dark:text-brand-300">
                Área do cliente
            </a>
        </div>
    </div>
</div>
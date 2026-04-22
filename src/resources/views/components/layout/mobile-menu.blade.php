<div
    id="mobile-menu"
    class="border-t border-slate-200 bg-white lg:hidden dark:bg-slate-900 dark:border-slate-700 hidden">
    <div class="mx-auto flex max-w-7xl flex-col gap-3 px-4 py-4">
        <a href="{{ route('home') }}" class="rounded-xl px-3 py-2 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800">Home</a>
        <a href="{{ route('hospedagem') }}" class="rounded-xl px-3 py-2 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800">Hospedagem</a>
        <a href="{{ route('criacao-sites') }}" class="rounded-xl px-3 py-2 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800">Criação de sites</a>
        <a href="{{ route('sobre') }}" class="rounded-xl px-3 py-2 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800">Sobre</a>
        <a href="{{ route('faq') }}" class="rounded-xl px-3 py-2 hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800">FAQ</a>
        <a href="{{ route('contato') }}" class="rounded-xl bg-brand-400 px-3 py-2 font-semibold text-slate-950">Falar com especialista</a>

        {{-- Toggle no menu mobile --}}
        <button
            onclick="toggleDarkMode()"
            type="button"
            class="flex items-center gap-3 rounded-xl px-3 py-2 text-sm hover:bg-slate-100 dark:text-slate-300 dark:hover:bg-slate-800">
            <svg class="h-4 w-4 hidden dark:block" fill="currentColor" viewBox="0 0 24 24">
                <path d="M12 2.25a.75.75 0 0 1 .75.75v2.25a.75.75 0 0 1-1.5 0V3a.75.75 0 0 1 .75-.75ZM7.5 12a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM18.894 6.166a.75.75 0 0 0-1.06-1.06l-1.591 1.59a.75.75 0 1 0 1.06 1.061l1.591-1.59ZM21.75 12a.75.75 0 0 1-.75.75h-2.25a.75.75 0 0 1 0-1.5H21a.75.75 0 0 1 .75.75ZM17.834 18.894a.75.75 0 0 0 1.06-1.06l-1.59-1.591a.75.75 0 1 0-1.061 1.06l1.59 1.591ZM12 18a.75.75 0 0 1 .75.75V21a.75.75 0 0 1-1.5 0v-2.25A.75.75 0 0 1 12 18ZM7.166 17.834a.75.75 0 0 0-1.06 1.06l1.59 1.591a.75.75 0 1 0 1.061-1.06l-1.59-1.591ZM6 12a.75.75 0 0 1-.75.75H3a.75.75 0 0 1 0-1.5h2.25A.75.75 0 0 1 6 12ZM6.166 6.166a.75.75 0 0 0 1.06 1.06l1.59-1.59a.75.75 0 1 0-1.06-1.061l-1.59 1.59Z" />
            </svg>
            <svg class="h-4 w-4 block dark:hidden" fill="currentColor" viewBox="0 0 24 24">
                <path d="M21.752 15.002A9.72 9.72 0 0 1 18 15.75c-5.385 0-9.75-4.365-9.75-9.75 0-1.33.266-2.597.748-3.752A9.753 9.753 0 0 0 3 11.25C3 16.635 7.365 21 12.75 21a9.753 9.753 0 0 0 9.002-5.998Z" />
            </svg>
            <span>Alternar tema</span>
        </button>
    </div>
</div>
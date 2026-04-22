<footer class="border-t border-slate-200 bg-slate-100 dark:bg-slate-900 dark:border-slate-700">
    <div class="mx-auto grid max-w-7xl gap-8 px-4 py-12 md:grid-cols-2 lg:grid-cols-4 lg:px-6">
        <div>
            <div class="text-lg font-black dark:text-white">Portal Web PE</div>
            <p class="mt-4 text-sm leading-7 text-slate-500 dark:text-slate-400">
                Hospedagem, criação de sites e presença digital com atendimento próximo e foco em resultado.
            </p>
        </div>
        <div>
            <h3 class="font-bold dark:text-white">Soluções</h3>
            <ul class="mt-4 space-y-3 text-sm text-slate-500 dark:text-slate-400">
                <li><a href="{{ route('hospedagem') }}" class="hover:text-slate-900 dark:hover:text-white">Hospedagem de
                        sites</a></li>
                <li><a href="{{ route('criacao-sites') }}" class="hover:text-slate-900 dark:hover:text-white">Criação de
                        sites</a></li>
                <li><a href="{{ route('faq') }}" class="hover:text-slate-900 dark:hover:text-white">FAQ</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold dark:text-white">Atendimento</h3>
            <ul class="mt-4 space-y-3 text-sm text-slate-500 dark:text-slate-400">
                <li><a href="{{ route('contato') }}" class="hover:text-slate-900 dark:hover:text-white">Fale conosco</a>
                </li>
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-white">Abrir chamado</a></li>
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-white">Confirmar pagamento</a></li>
            </ul>
        </div>
        <div>
            <h3 class="font-bold dark:text-white">Institucional</h3>
            <ul class="mt-4 space-y-3 text-sm text-slate-500 dark:text-slate-400">
                <li><a href="{{ route('sobre') }}" class="hover:text-slate-900 dark:hover:text-white">Sobre a
                        empresa</a></li>
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-white">Termos de uso</a></li>
                <li><a href="#" class="hover:text-slate-900 dark:hover:text-white">Política de privacidade</a></li>
            </ul>
        </div>
    </div>

    <div class="border-t border-slate-200/70 dark:border-slate-700/50">
        <div
            class="mx-auto flex max-w-7xl flex-col gap-2 px-4 py-4 text-[11px] text-slate-500 dark:text-slate-500 md:flex-row md:items-center md:justify-between md:gap-4 lg:px-6">
            <span>Copyright &copy; 2000-{{ date('Y') }}</span>
            <span>Resp. Téc.: Evaldo Lopes | Rua: Padre Chromácio Leão, 112 - Centro - Jaboatão dos Guararapes/PE - CEP:
                54.080-330</span>
            <span>Desenvolvido por: PortalWebPE</span>
        </div>
    </div>
</footer>
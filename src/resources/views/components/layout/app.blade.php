<!DOCTYPE html>
<html lang="pt-BR" class="scroll-smooth dark">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script>
        (function() {
            if (localStorage.getItem('theme') === 'light') {
                document.documentElement.classList.remove('dark');
            } else {
                document.documentElement.classList.add('dark');
            }
        })();
    </script>
    <x-layout.seo :title="$title ?? 'Portal Web PE | Hospedagem, criação de sites e presença digital'"
        :description="$description ?? 'Hospedagem de sites, criação de sites, SEO e suporte especializado para empresas que querem crescer online com confiança.'"
        :keywords="$keywords ?? 'hospedagem de sites, criação de sites, portal web pe, seo, hospedagem pernambuco'"
        :image="$image ?? asset('images/og/portalwebpe-home.jpg')" />
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('head')
</head>

<body class="bg-slate-50 text-slate-900 antialiased dark:bg-slate-950 dark:text-slate-100">
    <div x-data="siteHeader()" class="min-h-screen">
        <x-layout.topbar />
        <x-layout.header />

        <main>
            {{ $slot }}
        </main>

        <x-common.whatsapp-float />
        <x-layout.footer />
    </div>

    @stack('scripts')
</body>

</html>
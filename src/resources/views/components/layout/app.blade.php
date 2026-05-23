<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <x-layout.seo :title="$title ?? 'Portal Web PE | Hospedagem, criação de sites e presença digital'"
        :description="$description ?? 'Hospedagem de sites, criação de sites e presença digital para empresas que querem crescer online com confiança.'"
        :keywords="$keywords ?? 'hospedagem de sites, criação de sites, portal web pe, hospedagem pernambuco'"
        :image="$image ?? null" />
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.css">
    <!-- Google Fonts: Inter -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    @vite(['resources/css/app.css'])
    @stack('head')
    <!-- Tema: evita flash ao carregar -->
    <script>
        (function() {
            var t = localStorage.getItem('pwpe-theme') || 'dark';
            document.documentElement.setAttribute('data-bs-theme', t);
        })();
    </script>
</head>

<body>
    <div class="top-header-wrapper">
        <x-layout.topbar />
        <x-layout.header />
    </div>

    <main>
        {{ $slot }}
    </main>

    <x-common.whatsapp-float />
    <x-layout.footer />

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>

</html>
@props(['title', 'subtitle' => null, 'breadcrumb' => null])
<section class="page-header">
    <div class="container" style="position:relative;z-index:2;">
        <span class="eyebrow">Portal Web PE</span>
        <h1>{{ $title }}</h1>
        @if($subtitle)
        <p class="lead mt-3">{{ $subtitle }}</p>
        @endif
        @if($breadcrumb)
        <div class="breadcrumb-custom">
            <a href="{{ route('home') }}">Inicio</a> / {{ $breadcrumb ?? $title }}
        </div>
        @endif
    </div>
</section>
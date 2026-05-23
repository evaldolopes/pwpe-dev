@props([
    'name',
    'description',
    'monthlyPrice',
    'annualPrice',
    'features' => [],
    'highlight' => false,
    'tag' => null,
    'buttonText' => 'Escolher plano',
    'buttonHref' => null,
])
@php $buttonHref = $buttonHref ?? route('contato'); @endphp

<div class="col-md-6 col-lg-4">
    <div class="plan-card {{ $highlight ? 'featured' : '' }}">
        @if($tag)
        <div class="plan-badge">{{ $tag }}</div>
        @endif
        <h3>{{ $name }}</h3>
        <p class="plan-tagline">{{ $description }}</p>
        <div class="price price-monthly">
            <span class="price-cur">R$</span>
            <span class="price-num">{{ $monthlyPrice }}</span>
            <span class="price-period">/mes</span>
        </div>
        <div class="price price-annual">
            <span class="price-cur">R$</span>
            <span class="price-num">{{ $annualPrice }}</span>
            <span class="price-period">/mes no anual</span>
        </div>
        <ul class="plan-features">
            @foreach($features as $feature)
            <li><i class="bi bi-check-circle-fill"></i> {{ $feature }}</li>
            @endforeach
        </ul>
        <a href="{{ $buttonHref }}" class="btn {{ $highlight ? 'btn-accent' : 'btn-primary' }} w-100 mt-auto">
            {{ $buttonText }}
        </a>
    </div>
</div>
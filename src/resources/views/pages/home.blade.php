<x-layout.app
    title="Portal Web PE | Hospedagem, criação de sites e presença digital"
    description="Hospedagem de sites, criação de sites e suporte especializado para empresas que querem crescer online com mais confiança."
>
    <x-sections.hero />
    <x-sections.stats />
    <x-sections.benefits />
    <x-sections.pricing />
    <x-sections.services />
    <x-sections.testimonials />
    <x-sections.faq />
    <x-sections.cta />

    @include('partials.schemas.organization')
    @include('partials.schemas.faq')
</x-layout.app>

<x-layout.app
    title="Portal Web PE | Hospedagem, Criacao de Sites e Presenca Digital"
    description="Hospedagem de sites, criacao de sistemas web e presenca digital para empresas de Pernambuco e todo o Brasil.">
    <x-sections.hero />
    <x-sections.stats />
    <x-sections.services />
    <x-sections.benefits />
    <x-sections.pricing :testimonials="$testimonials ?? collect()" />
    <x-sections.testimonials :testimonials="$testimonials ?? collect()" />
    <x-sections.faq />
    <x-sections.cta />
</x-layout.app>